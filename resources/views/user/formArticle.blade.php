@extends('layouts.nav')

@section('page_title')
    OTCI GROUPE
@endsection

@section('content')
<div style="padding-top : 15%;"></div>
<div class="justify-content-center">

<form action="{{ route ('storeArticle') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Titre</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Titre" name="titre" id="titre" required
                />
              </label> <br>
             
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Date</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Date" type="date" name="datee" id="datee" required
                />
              </label> <br>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">categorie</span>
                <select name="categorie_article_id" id="categorie_article_id" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                   required>
                   @foreach ($categorieArticle as $categorieArticle)
                      <option value="{{ $categorieArticle->id }}">{{ $categorieArticle->nom }}</option>
                    @endforeach
                </select>
              </label> <br>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Description</span>
                <textarea name="description" id="description"  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Description" required></textarea>
              </label><br>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Image</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                   name="image" id="image" required type="file"
                />
              </label>
               <br>
              
              <div>
                <button type="submit"
                  class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  Enregistrer
                </button>
              </div>
              </form>
                </div>
                
             

@include('layouts.foot')
@endsection