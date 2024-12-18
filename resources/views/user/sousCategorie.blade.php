@extends('layouts.nav')

@section('page_title')
    OTCI GROUPE
@endsection

@section('content')
<div style="padding-top : 15%;"></div>
<div class="justify-content-center">

<form action="{{ route ('storeSousCategorie') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nom</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Nom" name="nom" id="nom" required
                />
              </label> <br>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">categorie</span>
                <select name="categorie_id" id="categorie_id" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                   required>
                   @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->nom }}</option>
                    @endforeach
                </select>
              </label> <br>
              
             
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