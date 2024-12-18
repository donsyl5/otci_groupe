<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Poste;
use App\Models\Equipe;
use App\Models\Groupe;
use App\Models\Metier;
use App\Models\Offres;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Categorie;
use App\Models\Realisation;
use App\Models\InfosContact;
use Illuminate\Http\Request;
use App\Models\Sous_categorie;
use App\Models\Categorie_article;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function admin(){
        $realisation = Realisation::count();
        $article = Article::count();
        $candidature = Offres::count();
        $contact = Contact::count();
        return view('admin.dashboard', compact('realisation', 'article', 'contact','candidature'));
    }





    public function listeUtilisateurs(){
        $user = User::orderBy('created_at', 'desc')->get();
        return view('auths.listeUtilisateurs', compact('user'));
    }

    public function realisation(){

        $realisations = Realisation::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.realisation', compact('realisations'));
    }

    public function form(){
        $sousCategories = Sous_categorie::orderBy('created_at', 'desc')->get();
        return view('admin.form', compact('sousCategories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'maitre' => 'required',
            'partenaire' => 'required',
            'mission' => 'required',
            'montant' => 'required',
            'datee' => 'required',
            'sous_categorie_id' => 'required',
            'image' => 'required',
        ]);

        $realisation = new Realisation();
        $realisation->titre = $request->input('titre');
        $realisation->description = $request->input('description');
        $realisation->maitre = $request->input('maitre');
        $realisation->partenaire = $request->input('partenaire');
        $realisation->mission = $request->input('mission');
        $realisation->montant = $request->input('montant');
        $realisation->datee = $request->input('datee');
        $realisation->sous_categorie_id = $request->input('sous_categorie_id');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.' . $extension;
            $file->move('upload/images', $filename);
            $realisation->image = $filename;
        } else {
            $realisation->image = '';
        }

        $galerie = array();
        if($files = $request->file('galerie')){
            foreach ($files as $file){
                $galerie_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $galerie_full_name = $galerie_name.'.'.$ext;
                $upload_path = 'upload/gallery/';
                $galerie_url = $upload_path.$galerie_full_name;
                $file->move($upload_path, $galerie_full_name);
                $galerie[] = $galerie_url;
            }
        }

        $realisation->galerie = json_encode($galerie);


        $realisation->save();

        return redirect()->route('form');
    }


    public function search(Request $request)
{
    $search = $request->input('search');
    $realisations = Realisation::where('titre', 'like', "%{$search}%")
        ->orWhere('partenaire', 'like', "%{$search}%")
        ->orWhere('maitre', 'like', "%{$search}%")
        ->get();
    return view('admin.search', compact('realisations'));
}





    public function modifierRealisation($id){
        $realisation = Realisation::findOrFail($id);
        $categorie = Sous_categorie::all();
        return view('admin.modifierRealisation', compact('realisation', 'categorie'));
    }


    public function updateRealisation(Request $request, $id){

        $validated = $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'maitre' => 'required',
            'partenaire' => 'required',
            'mission' => 'required',
            'montant' => 'required',
            'datee' => 'required',
            'sous_categorie_id' => 'required',

        ]);

        $realisation = Realisation::findOrFail($id);
        $realisation->titre = $request->input('titre');
        $realisation->description = $request->input('description');
        $realisation->maitre = $request->input('maitre');
        $realisation->partenaire = $request->input('partenaire');
        $realisation->mission = $request->input('mission');
        $realisation->montant = $request->input('montant');
        $realisation->datee = $request->input('datee');
        $realisation->sous_categorie_id = $request->input('sous_categorie_id');

        if ($request->hasfile('image')) {
            $filePath = public_path('upload/images');
            $file = $request->file('image');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);

            if (!is_null($realisation->image)) {
                $oldImage = public_path('upload/images' . $realisation->image);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }
            $realisation->image = $file_name;
        }

        $galerie = json_decode($realisation->galerie, true); // Récupération de la galerie existante

        if ($request->hasfile('galerie')) {
            $files = $request->file('galerie');

            foreach ($files as $file) {
                $galerie_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $galerie_full_name = $galerie_name . '.' . $ext;
                $upload_path = 'upload/gallery/';
                $galerie_url = $upload_path . $galerie_full_name;
                $file->move($upload_path, $galerie_full_name);
                $galerie[] = $galerie_url;
            }
        }

        $realisation->galerie = $galerie;

        $realisation->save();

        Session::flash('success', 'Realisation modifié avec succès');
        return redirect()->route('realisation-a');
    }





    public function deleteRealisation(Request $request){
        $realisation = Realisation::findOrFail($request->id);
        $realisation->delete();
        if (!is_null($realisation->image)) {
            $image = public_path('upload/realisations' . $realisation->image);
            if (File::exists($image)) {
                unlink($image);
            }
        }
    Session::flash('success', 'realisation supprimée avec succès');
     return redirect()->route('realisation-a');
    }








    public function actualite(){
        $articles = Article::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.actualite', compact('articles'));
    }

    public function formArticle(){
        $categorieArticle = Categorie_article::all();
        return view('admin.formArticle', compact('categorieArticle'));
    }

    public function storeArticle(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'datee' => 'required',
            'categorie_article_id' => 'required',
            'image' => 'required',
        ]);

        $article = new Article();
        $article->titre = $request->input('titre');
        $article->description = $request->input('description');
        $article->datee = $request->input('datee');
        $article->categorie_article_id = $request->input('categorie_article_id');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.' . $extension;
            $file->move('upload/article', $filename);
            $article->image = $filename;
        } else {
            $article->image = '';
        }

        $article->save();

        return redirect()->route('actualite-a');
    }



    public function modifierActualite($id){
        $article = Article::findOrFail($id);
        $categorie = Categorie_article::all();
        return view('admin.ModifierActualite', compact('article', 'categorie'));
    }


    public function updateActualite(Request $request, $id){

        $validated = $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'datee' => 'required',
            'categorie_article_id' => 'required',

        ]);

        $article = Article::findOrFail($id);
        $article->titre = $request->input('titre');
        $article->description = $request->input('description');
        $article->datee = $request->input('datee');
        $article->categorie_article_id = $request->input('categorie_article_id');

        if ($request->hasfile('image')) {
            $filePath = public_path('upload/article');
            $file = $request->file('image');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);

            if (!is_null($article->image)) {
                $oldImage = public_path('upload/article' . $article->image);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }
            $article->image = $file_name;
        }
        $article->save();

        Session::flash('success', 'Actualité modifiée avec succès');
        return redirect()->route('actualite-a');
    }





    public function deleteActualite(Request $request){
        $article = article::findOrFail($request->id);
        $article->delete();
        if (!is_null($article->image)) {
            $image = public_path('upload/article' . $article->image);
            if (File::exists($image)) {
                unlink($image);
            }
        }
    Session::flash('success', 'Actualité supprimée avec succès');
     return redirect()->route('actualite-a');
    }






    public function storeCategorie(Request $request){

        $validated = $request->validate([
            'nom' => 'required',
        ]);

        $categorie = new Categorie();
        $categorie->nom = $request->input('nom');

        $categorie->save();
        return redirect('categorie');
    }

    public function categorie(){
        $categories = Categorie::all();
        return view('admin.categorie', compact('categories'));
    }


    public function modifierCategorie($id){
        $categorie = Categorie::findOrFail($id);
        return view('admin.modifierCategorie', compact('categorie'));
    }

    public function updateCategorie(Request $request, $id)
    {
        $validated = $request->validate([
            'nom' => 'required',
        ]);

        $categorie = Categorie::findOrFail($id);
        $categorie->nom = $request->input('nom');
        $categorie->save();
        return redirect()->route('categorie');
    }


    public function deleteCategorie(Request $request){
        $categorie = Categorie::findOrFail($request->id);
        $categorie->delete();

      Session::flash('success', 'Catégorie supprimée avec succès');
     return redirect()->route('categorie');
    }






    public function storeSousCategorie(Request $request){
        $validated = $request->validate([
            'nom' => 'required',
            'categorie_id' => 'required',
        ]);

        $sous_categorie = new Sous_categorie();
        $sous_categorie->nom = $request->input('nom');
        $sous_categorie->categorie_id = $request->input('categorie_id');

        $sous_categorie->save();
        return redirect('sousCategorie');
    }
    public function sousCategorie(){
        $sous_categorie = Sous_categorie::all();
        $categories = Categorie::all();
        return view('admin.sousCategorie', compact('categories', 'sous_categorie'));
    }


    public function modifierSousCategorie($id){
        $sous_categorie = Sous_categorie::findOrFail($id);
        $categorie = Categorie::all();
        return view('admin.modifierSousCategorie', compact('categorie','sous_categorie'));
    }

    public function updateSousCategorie(Request $request, $id)
    {
        $validated = $request->validate([
            'nom' => 'required',
        ]);

        $categorie = Sous_categorie::findOrFail($id);
        $categorie->nom = $request->input('nom');
        $categorie->save();
        return redirect()->route('sousCategorie');
    }


    public function deleteSousCategorie(Request $request){
        $categorie = Sous_categorie::findOrFail($request->id);
        $categorie->delete();

      Session::flash('success', 'Sous catégorie supprimée avec succès');
     return redirect()->route('sousCategorie');
    }



    public function storeCategorieArticle(Request $request){
        $validated = $request->validate([
            'nom' => 'required',
        ]);

        $categorieArticle = new Categorie_article();
        $categorieArticle->nom = $request->input('nom');

        $categorieArticle->save();

        return redirect('categorieArticle');
    }

    public function categorieArticle(){
        $cats = Categorie_article::all();
        return view('admin.categorieArticle', compact('cats'));
    }



    public function modifierCategorieArticle($id){
        $categorie = Categorie_article::findOrFail($id);
        return view('admin.modifierCategorieArticle', compact('categorie'));
    }

    public function updateCategorieArticle(Request $request, $id)
    {
        $validated = $request->validate([
            'nom' => 'required',
        ]);

        $categorie = Categorie_article::findOrFail($id);
        $categorie->nom = $request->input('nom');
        $categorie->save();
        return redirect()->route('categorieArticle');
    }


    public function deleteCategorieArticle(Request $request){
        $categorie = Categorie_article::findOrFail($request->id);
        $categorie->delete();

      Session::flash('success', 'Catégorie supprimée avec succès');
     return redirect()->route('categorieArticle');
    }






    public function groupe(){
        $groupes = Groupe::all();
        return view('admin.groupe', compact('groupes'));
    }

    public function formulaireGroupe(){
        return view('admin.formulaireGroupe');
    }

    public function storeGroupe(Request $request)
    {


        $groupe = new Groupe();
        $groupe->titre1 = $request->input('titre1');
        $groupe->titre2 = $request->input('titre2');
        $groupe->titre3 = $request->input('titre3');
        $groupe->titre4 = $request->input('titre4');
        $groupe->texte1 = $request->input('texte1');
        $groupe->texte2 = $request->input('texte2');
        $groupe->texte3 = $request->input('texte3');
        $groupe->texte4 = $request->input('texte4');

        if($request->hasfile('image1')){
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.' . $extension;
            $file->move('upload/groupes', $filename);
            $groupe->image1 = $filename;
        } else {
            $groupe->image1 = '';
        }


        if($request->hasfile('image2')){
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.' . $extension;
            $file->move('upload/groupes', $filename);
            $groupe->image2 = $filename;
        } else {
            $groupe->image2 = '';
        }


        if($request->hasfile('image3')){
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.' . $extension;
            $file->move('upload/groupes', $filename);
            $groupe->image3 = $filename;
        } else {
            $groupe->image3 = '';
        }

        $groupe->save();

        return redirect()->route('listeGroupe');
    }




    public function modifierGroupe($id){
        $groupe = Groupe::findOrFail($id);
        return view('admin.modifierGroupe', compact('groupe'));
    }


    public function updateGroupe(Request $request, $id){


        $groupe = Groupe::findOrFail($id);
        $groupe->titre1 = $request->input('titre1');
        $groupe->titre2 = $request->input('titre2');
        $groupe->titre3 = $request->input('titre3');
        $groupe->titre4 = $request->input('titre4');
        $groupe->texte1 = $request->input('texte1');
        $groupe->texte2 = $request->input('texte2');
        $groupe->texte3 = $request->input('texte3');
        $groupe->texte4 = $request->input('texte4');

        if ($request->hasfile('image1')) {
            $filePath = public_path('upload/groupes');
            $file = $request->file('image1');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);

            if (!is_null($groupe->image1)) {
                $oldImage = public_path('upload/groupes' . $groupe->image1);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }
            $groupe->image1 = $file_name;
        }

        if ($request->hasfile('image2')) {
            $filePath = public_path('upload/groupes');
            $file = $request->file('image2');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);

            if (!is_null($groupe->image2)) {
                $oldImage = public_path('upload/groupes' . $groupe->image2);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }
            $groupe->image2 = $file_name;
        }

        if ($request->hasfile('image3')) {
            $filePath = public_path('upload/groupes');
            $file = $request->file('image3');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);

            if (!is_null($groupe->image3)) {
                $oldImage = public_path('upload/groupes' . $groupe->image3);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }
            $groupe->image3 = $file_name;
        }
        $groupe->save();

        Session::flash('success', 'Groupe modifié avec succès');
        return redirect()->route('listeGroupe');
    }










    public function metier(){
        $metiers = Metier::all();
        return view('admin.metier', compact('metiers'));
    }

    public function formulaireMetier(){
        return view('admin.formulaireMetier');
    }

    public function storeMetier(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required',
            'texte' => 'required',
            'slug' => 'required|unique:metiers',
        ]);

        $metier = new Metier();
        $metier->titre = $request->input('titre');
        $metier->texte = $request->input('texte');
        $metier->slug = $request->input('slug');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.' . $extension;
            $file->move('upload/metiers', $filename);
            $metier->image = $filename;
        } else {
            $metier->image = '';
        }

        $metier->save();

        return redirect()->route('listeMetier');
    }






    public function modifierMetier($id){
        $metier = Metier::findOrFail($id);
        return view('admin.modifierMetier', compact('metier'));
    }


    public function updateMetier(Request $request, $id){

        $validated = $request->validate([
            'titre' => 'required',
            'texte' => 'required',
        ]);

        $metier = Metier::findOrFail($id);
        $metier->titre = $request->input('titre');
        $metier->texte = $request->input('texte');
        $metier->slug = $request->input('slug');

        if ($request->hasfile('image')) {
            $filePath = public_path('upload/metiers');
            $file = $request->file('image');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);

            if (!is_null($metier->image)) {
                $oldImage = public_path('upload/metiers' . $metier->image);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }
            $metier->image = $file_name;
        }
        $metier->save();

        Session::flash('success', 'Metier modifié avec succès');
        return redirect()->route('listeMetier');
    }





    public function deleteMetier(Request $request){
        $metier = Metier::findOrFail($request->id);
        $metier->delete();
        if (!is_null($metier->image)) {
            $image = public_path('upload/metiers' . $metier->image);
            if (File::exists($image)) {
                unlink($image);
            }
        }
    Session::flash('success', 'Metier supprimé avec succès');
     return redirect()->route('listeMetier');
    }











    public function infosContact(){
        $infos = InfosContact::all();
        return view('admin.listeInfos', compact('infos'));
    }

    public function formulaireInfos(){
        return view('admin.formulaireInfos');
    }

    public function storeInfos(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required',
            'lieu' => 'required',
            'phone' => 'required',
            'map' => 'required',
            'email' => 'required',
        ]);

        $infos = new InfosContact();
        $infos->address = $request->input('address');
        $infos->lieu = $request->input('lieu');
        $infos->phone = $request->input('phone');
        $infos->map = $request->input('map');
        $infos->email = $request->input('email');

        $infos->save();

        return redirect()->route('infosContact');
    }


    public function modifierInfos($id){
        $infos = InfosContact::findOrFail($id);
        return view('admin.modifierInfos', compact('infos'));
    }



    public function updateInfos(Request $request, $id)
    {
        $validated = $request->validate([
            'address' => 'required',
            'lieu' => 'required',
            'phone' => 'required',
            'map' => 'required',
            'email' => 'required',
        ]);



        $infos = InfosContact::find($id);
        $infos->address = $request->input('address');
        $infos->lieu = $request->input('lieu');
        $infos->phone = $request->input('phone');
        $infos->map = $request->input('map');
        $infos->email = $request->input('email');

        $infos->save();

        return redirect()->route('infosContact');

    }




    public function listeEquipe(){
        $equipes = Equipe::paginate(5);
        return view('admin.equipe', compact('equipes'));
    }

    public function formulaireEquipe(){
        return view('admin.formulaireEquipe');
    }

    public function storeEquipe(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'poste' => 'required',
        ]);

        $equipe = new Equipe();
        $equipe->nom = $request->input('nom');
        $equipe->poste = $request->input('poste');
        $equipe->reseau = $request->input('reseau');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.' . $extension;
            $file->move('upload/equipes', $filename);
            $equipe->image = $filename;
        } else {
            $equipe->image = '';
        }

        $equipe->save();

        return redirect()->route('listeEquipe');
    }



    public function modifierEquipe($id){
        $equipe = Equipe::findOrFail($id);
        return view('admin.modifierEquipe', compact('equipe'));
    }


    public function updateEquipe(Request $request, $id){

        $validated = $request->validate([
            'nom' => 'required',
            'poste' => 'required',
        ]);

        $equipe = Equipe::findOrFail($id);
        $equipe->nom = $request->input('nom');
        $equipe->poste = $request->input('poste');
        $equipe->reseau = $request->input('reseau');

        if ($request->hasfile('image')) {
            $filePath = public_path('upload/equipes');
            $file = $request->file('image');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);

            if (!is_null($equipe->image)) {
                $oldImage = public_path('upload/equipes' . $equipe->image);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }
            $equipe->image = $file_name;
        }
        $equipe->save();

        Session::flash('success', 'Equipe modifiée avec succès');
        return redirect()->route('listeEquipe');
    }



    public function deleteEquipe(Request $request){
        $equipe = Equipe::findOrFail($request->id);
        $equipe->delete();
        if (!is_null($equipe->image)) {
            $image = public_path('upload/equipes' . $equipe->image);
            if (File::exists($image)) {
                unlink($image);
            }
        }
    Session::flash('success', 'Equipe supprimée avec succès');
     return redirect()->route('listeEquipe');
    }







    public function listePoste(){
        $postes = Poste::all();
        return view('admin.poste', compact('postes'));
    }

    public function formulairePoste(){
        return view('admin.formulairePoste');
    }

    public function storePoste(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
        ]);

        $poste = new Poste();
        $poste->nom = $request->input('nom');
        $poste->save();

        return redirect()->route('listePoste');
    }






    public function modifierPoste($id){
        $poste = Poste::findOrFail($id);
        return view('admin.modifierPoste', compact('poste'));
    }


    public function updatePoste(Request $request, $id){

        $validated = $request->validate([
           'nom' => 'required',
        ]);

        $poste = Poste::findOrFail($id);
        $poste->nom = $request->input('nom');
        $poste->save();

        Session::flash('success', 'Poste modifié avec succès');
        return redirect()->route('listePoste');
    }


    public function deletePoste(Request $request){
        $poste = Poste::findOrFail($request->id);
        $poste->delete();
    Session::flash('success', 'Poste supprimé avec succès');
     return redirect()->route('listePoste');
    }


    public function activerPoste($id){
        $poste = Poste::find($id);

        if ($poste) {
            $poste->status = 1;
            $poste->save();
        }
     return redirect()->back();
    }


    public function desactiverPoste($id){
        $poste = Poste::find($id);

        if ($poste) {
            $poste->status = 0;
            $poste->save();
        }
     return redirect()->back();
    }


    public function listeCandidature(){

        $offres = Offres::orderBy('created_at','desc')->get();
        return view('admin.listeOffres', compact('offres'));

    }


    public function listeContactMessage(){
        $contacts = Contact::orderBy('created_at','desc')->paginate(5);

        return view('admin.contact', compact('contacts'));
    }




    public function dowloadCv($id){

        $document = Offres::find($id);

        if(!$document) {
            return response()->json(['message' => 'Document non trouvé.'], 404);
        }

        $file = 'upload/cv/'.$document->cv;

        if(!file_exists($file)) {
            return response()->json(['message' => 'Fichier non trouvé.'], 404);
        }

        return response()->download($file);
    }



    public function dowloadLettre($id){

        $document = Offres::find($id);

        if(!$document) {
            return response()->json(['message' => 'Document non trouvé.'], 404);
        }

        $file = 'upload/lettre/'.$document->lettre;

        if(!file_exists($file)) {
            return response()->json(['message' => 'Fichier non trouvé.'], 404);
        }

        return response()->download($file);
    }

}
