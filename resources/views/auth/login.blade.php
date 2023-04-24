

@extends("layouts.master")



@section('contenu')



<div class="container mt-5 pt-5">



    <div class="card my-5  shadow-sm"  style="width:800px;  margin:auto; border-radius:15px;border:1px solid antiquewhite " >
        <div class="card-header">
           <h5 class="card-title">Connexion
               @if (session()->has('success'))
                   <div class="alert alert-success">
                   <h4>{{ session()->get('success') }}</h4>
                   </div>
                @endif
               @if ($errors->any())
                 <div class="alert alert-danger">
                    <ul>
                       @foreach ($errors->all() as $error )
                           <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                </div>

               @endif
           </h5>
        </div>

       <div class="card-body">

       <form style="" class="p-4 " method="POST" action="#">

           @csrf

                  <div class="mb-3">
               <label for="mail" class="form-label">Email</label>
              <input type="mail" class="form-control" name="email" id="mail">
           </div>

           <div class="mb-3">
               <label for="password" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" name="password" id="password">
           </div>

           <div class="block mt-4">
               <label for="remember_me" class="inline-flex items-center">
                   <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                   <span class="ml-2 text-sm text-blue1 h5">Se Rappeler de moi</span>
               </label>
           </div>

           <div class="">
               <span>Si vous n'avez pas de compte, </span><a class="text-blue2 underline" href="{{ route('register') }}">inscrirez-vous</a>
           </div>
           <div class="flex items-center justify-end mt-4">
               @if (Route::has('password.request'))
                   <a class="underline text-blue2" href="{{ route('password.request') }}">
                       Mot de passe oublier ?
                   </a>
               @endif
           <button type="submit" class="btn bg-blue">Se Connecter</button>

         </form>
       </div>
   </div>
</div>






@endsection
