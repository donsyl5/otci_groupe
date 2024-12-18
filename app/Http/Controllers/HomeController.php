<?php

namespace App\Http\Controllers;

use App\Models\Poste;
use App\Mail\UserMail;
use App\Models\Equipe;
use App\Models\Groupe;
use App\Models\Metier;
use App\Models\Offres;
use App\Models\Article;
use App\Models\Contact;
use App\Mail\ContactMail;
use App\Models\Categorie;
use App\Models\Realisation;
use App\Models\InfosContact;
use Illuminate\Http\Request;
use App\Mail\CandidatureMail;
use App\Models\Sous_categorie;
use App\Models\Categorie_article;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index(){
        $nombre = Realisation::count();
        $realisations = Realisation::take(3)->get();
        $metiers = Metier::take(3)->get();
        $actualites = Article::take(3)->get();
        return view('user.home', compact('realisations', 'actualites', 'nombre','metiers'));
    }

    public function groupe(){
        $equipes = Equipe::all();
        $groupes = Groupe::orderBy('created_at', 'desc')->get();
        return view('user.groupe', compact('groupes','equipes'));
    }

    public function metier(){

        $metiers = Metier::orderBy('created_at', 'desc')->get();
        return view('user.metier', compact('metiers'));
    }




    public function realisation(){

        $categories = Categorie::all();
        $realisations = Realisation::paginate(9);
        return view('user.realisation', compact('realisations', 'categories'));
    }




    public function actualite(Request $request){
        $categorieArticle = Categorie_article::all();
        $articles = Article::paginate(9);

        if ($request->has('categorie')) {
            $categorieId = $request->input('categorie');
            $articles = Article::where('categorie_article_id', $categorieId)->paginate(9);
        }
        return view('user.actualite', compact('categorieArticle', 'articles'));
    }




    public function client(){
        return view('user.client');
    }


    public function joindre(){
        $postes  = Poste::where('status', 1)->get();
        return view('user.joindre', compact('postes'));
    }

    public function storeCandidature(Request $request)
    {

    $validated = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'poste' => 'required',
        'email' => 'required',
        'cv' => 'required|mimes:pdf,doc',
        'g-recaptcha-response' => 'required|captcha',
        'lettre' => 'required|mimes:pdf,doc',
    ], [
        'cv.mimes' => 'Le fichier doit être de type PDF ou DOC.',
        'lettre.mimes' => 'Le fichier doit être de type PDF ou DOC.',
    ]);


    $offre = new Offres();
    $offre->nom = $request->input('nom');
    $offre->prenom = $request->input('prenom');
    $offre->poste = $request->input('poste');
    $offre->email = $request->input('email');

    if($request->hasfile('cv')){
        $cvFile = $request->file('cv');
        $extension = $cvFile->getClientOriginalExtension();
        $cvFilename = time() .'.' . $extension;
        $cvFile->move('upload/cv', $cvFilename);
        $offre->cv = $cvFilename;
    }


    if($request->hasfile('lettre')){
        $lettreFile = $request->file('lettre');
        $extension = $lettreFile->getClientOriginalExtension();
        $lettreFilename = time() .'.' . $extension;
        $lettreFile->move('upload/lettre', $lettreFilename);
        $offre->lettre = $lettreFilename;
    }
    $cvPath = public_path('upload/cv/' . $offre->cv);

    $lettrePath = public_path('upload/lettre/' . $offre->lettre);

    $offre->save();
    Mail::to($offre->email)->send(new UserMail($offre,$cvPath, $lettrePath));
    Mail::to('contact@otci.fr')->send(new CandidatureMail($offre,$cvPath, $lettrePath));
    return redirect()->route('joindre')->with('success', 'Candidature enregistrée');

}




    public function contact(){
        $contact = InfosContact::all();
        return view('user.contact', compact('contact'));
    }


    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'sujet' => 'required',
            'commentaire' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $contact = new Contact();
        $contact->nom = $request->input('nom');
        $contact->prenom = $request->input('prenom');
        $contact->email = $request->input('email');
        $contact->sujet = $request->input('sujet');
        $contact->commentaire = $request->input('commentaire');

        $contact->save();
        // Mail::to('contact@otci.fr')->send(new ContactMail($contact));
        return redirect()->route('contact')->with('success', 'Merci pour votre message');
    }



 public function detail( $id, $titre){

    $realisation = Realisation::findOrFail($id);

    if (!$realisation) {
        return 'Aucune donnée';
    }

    $galerie = json_decode($realisation->galerie);

    return view('user.detail', compact('realisation', 'galerie'));
}


    public function detail_actualite($id, $titre){

        $article = Article::findOrFail($id);

        return view('user.detail_article', compact ('article'));

    }



    public function detail_metier($slug){

        $metier = Metier::where('slug', $slug)->first();

        return view('user.detailMetier', compact ('metier'));

    }


    public function part($id, $nom){
        if (Categorie::where('id', $id)->exists()) {
            $categories = Categorie::where('id', $id)->first();
            $sous_categories = Sous_categorie::where('categorie_id', $categories->id)->get();

            $realisations = collect(); // Créez une collection vide pour stocker les réalisations

            foreach ($sous_categories as $sous_categorie) {
                $realisations = $realisations->concat(Realisation::where('sous_categorie_id', $sous_categorie->id)->get());

            }

            return view('user.part', compact('categories', 'sous_categories', 'realisations'));
        } else {
            return redirect('/');
        }

    }


    public function realisationsParSousCategorie(Request $request)
{
    $sousCategorieId = $request->input('sous_categorie_id');

    // Récupérez les réalisations correspondant à la sous-catégorie donnée
    $realisations = Realisation::where('sous_categorie_id', $sousCategorieId)->get();

    // Retournez la vue partielle contenant les réalisations correspondantes
    return view('user.realisations', compact('realisations'));
}

   public function telechargerPDF($nomFichier)
{
    $pdfPath = storage_path('app/public/fichiers/' . $nomFichier);

    return response()->download($pdfPath, $nomFichier);
}



public function acceptCookies(Request $request)
    {
        $cookieName = config('cookieconsent.name');
        $cookieLifetime = config('cookieconsent.duration');

        $cookie = Cookie::make($cookieName, true, $cookieLifetime);

        return redirect()->back();
    }

    public function checkCookies(Request $request)
    {
        $cookieName = config('cookieconsent.name');

        if ($request->cookie($cookieName)) {
            return response()->json(['accepted' => true]);
        } else {
            return response()->json(['accepted' => false]);
        }
    }


}
