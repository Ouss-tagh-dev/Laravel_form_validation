<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        /* .is-invalid{
            border:2px solid red;
        } */

        b{
            color:blue;
        }
    </style>
</head>
<body class="container">

 @if ( $errors->any() )
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="" method="POST" enctype="multipart/form-data">

        @csrf

        <div  class="form-group">
            <label for="">Nom</label>
            <input type="text" name="nom" value="{{ old('nom') }}"  class="form-control mb-1 @error('nom')  is-invalid @enderror">
            @error('nom')
                <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Prenom</label>
            <input type="prenom" name="prenom" value="{{ old('prenom') }}"  class="form-control mb-1 @error('prenom') is-invalid @enderror">
            @error('prenom')
                <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" value="{{ old('email') }}"  class="form-control mb-1 @error('email') is-invalid @enderror">
            @error('email')
                <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="">Téléphone</label>
            <input type="tel" name="tel" value="{{ old('tel') }}"  class="form-control mb-1 @error('tel') is-invalid @enderror">
            @error('tel')
                <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <p>Sexe : </p>
            <div class="form-check form-check-inline radio">
                <input class="form-check-input" type="radio" name="sexe"  value="homme" @error('sexe') is-invalid @enderror">
                <label class="form-check-label">Homme</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexe"  value="femme" @error('sexe') is-invalid @enderror">
                <label class="form-check-label">Femme</label>
            </div>
            @error('sexe')
                <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <select class="form-select" name="filiere" @error('filiere') is-invalid @enderror>
                <option value="DD"  @selected(old('filiere') == 'tdi')> Développement digital </option>
                <option value="ID"  @selected(old('filiere') == 'tdi')> infrastructure digital </option>
            </select>

            @error('filiere')
                <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <p>Options : </p>
            <div class="form-check" >
                <input class="form-check-input" type="checkbox" value="mobile" name="option[]">
                <label class="form-check-label">Mobile</label>
            </div>

            <div class="form-check ml-5">
                <input class="form-check-input" type="checkbox" value="web" name="option[]">
                <label class="form-check-label">Web</label>
            </div>

            <div class="form-check ml-5">
                <input class="form-check-input" type="checkbox" value="realite virtuelle" name="option[]">
                <label class="form-check-label">Réalité virtuelle</label>
            </div>

            @error('option')
                <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <div class="form-outline">
                <label class="form-label">Message</label>
                <textarea class="form-control" name="message" mb-1 @error('message') is-invalid @enderror"  rows="1"></textarea>
            </div>
            @error('message')
                <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group">
            <label for="">Photo</label>
            <input type="file" name="photo"  class="form-control-file mb-2  @error('tel') is-invalid @enderror">
            @error('photo')
                <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit" value="Evoyer" class="btn btn-primary w-100">

    </form>
</body>
</html>
