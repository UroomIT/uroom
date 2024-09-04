<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
    <title>Dashboard | {{ config('app.name')}} </title>
    
    <link href="{{asset('static/layouts/collapsible-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{asset('static/layouts/collapsible-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" /> -->
    <script src="{{asset('static/layouts/collapsible-menu/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('static/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('static/layouts/collapsible-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{asset('static/layouts/collapsible-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" /> -->
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('static/src/plugins/src/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('static/src/assets/css/light/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{asset('static/src/assets/css/dark/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" /> -->
    
    <link href="{{asset('static/src/assets/css/light/apps/contacts.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('static/src/assets/css/dark/apps/contacts.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('static/src/assets/css/light/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('static/src/plugins/src/filepond/filepond.min.css') }}">
    
    <link href="{{asset('static/src/plugins/css/light/filepond/custom-filepond.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('static/src/assets/css/light/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('static/src/assets/css/light/elements/alert.css') }}">

 
    <!-- AUTOCOMPLETE STYLES -->
    <link href="{{asset('static/src/plugins/src/autocomplete/css/autoComplete.02.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('static/src/plugins/css/light/autocomplete/css/custom-autoComplete.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('static/src/assets/css/dark/widgets/modules-widgets.css') }}">     -->

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <!-- for FLASHY -->
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
    <!-- end FLASHY -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="layout-boxed alt-menu">
    @include('partials.header')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        @include('partials.sidebar')
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="middle-content container-xxl p-0">
                    @yield('content')
                </div>
            </div>
            @include('partials.footer')
        </div>

    </div>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('static/src/assets/js/dashboard/dash_1.js') }}"></script>
    <script src="{{asset('static/src/assets/js/widgets/modules-widgets.js') }}"></script>
    <script src="{{asset('static/src/assets/js/custom.js') }}"></script>
    <script src="{{asset('static/src/assets/js/apps/contact.js') }}"></script>
    <script src="{{asset('static/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('static/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{asset('static/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{asset('static/src/plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{asset('static/layouts/collapsible-menu/app.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @include('flashy::message')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('static/src/plugins/src/apex/apexcharts.min.js') }}"></script>
    <script src="{{asset('static/src/assets/js/dashboard/dash_1.js') }}"></script>
    <script src="{{ asset('static/src/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{asset('static/src/assets/js/users/account-settings.js') }}"></script>
    <!-- <script src="{{asset('static/src/plugins/src/jquery-ui/jquery-ui.min.js') }}"></script> -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
     <script>
        
        $('#zero-config').DataTable({
            
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                "language": {
            "sProcessing":     "Processing ...",
            "sSearch":         "Search&nbsp;:",
            "sLengthMenu":     "_MENU_",
            "sInfo":           "Element(s) _START_ &agrave; _END_ sur _TOTAL_ ",
            "sInfoEmpty":      "Element(s) 0 &agrave; 0 sur 0",
            "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
            "sInfoPostFix":    "",
            "sLoadingRecords": "Processing...",
            "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
            "sEmptyTable":     "No data in the table",
            "oPaginate": {
                "sFirst":      "Fistr",
                "sPrevious":   "Past",
                "sNext":       "Next",
                "sLast":       "Last"
            },
            "oAria": {
                "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
            }
        },
        });



         // validation du numero de telephone au format guineen
     function validerNumero() {
        // Récupérer la valeur du champ de numéro de téléphone
        var numero = document.getElementById('Telephone').value;
        // Utiliser une expression régulière pour valider le format guinéen
        var regex = /^[2-9]{1}[0-9]{8}$/;
        var erreurNumero = document.getElementById('erreurNumero');

        var telephoneInput = document.getElementById('Telephone');
        var telephoneError = document.getElementById('erreurNumero');

        // Liste des préfixes d'opérateurs valides
        var validPrefixes = [
            '620', '621', '622', '623', '624', '625', '626', '627', '628', '629',
            '610', '611', '612', '660', '661', '662', '663', '664', '666', '654', '655', '656', '657',
        ];

        // Récupérer la valeur du champ de téléphone
        var telephoneValue = telephoneInput.value.trim();

        // Vérifier si le numéro de téléphone a un préfixe d'opérateur valide et est composé de 9 chiffres au total
        if (!validPrefixes.some(prefix => telephoneValue.startsWith(prefix)) || !/^\d{9}$/.test(telephoneValue)) {
            telephoneError.innerText = 'Le numéro de téléphone doit avoir un code d\'opérateur valide et être composé de 9 chiffres.';
            return false; // Empêche l'envoi du formulaire si la validation échoue
        }

        // Réinitialiser le message d'erreur si la validation réussit
        telephoneError.innerText = '';

        return true; // Permet l'envoi du formulaire si la validation réussit

        if (regex.test(numero)) {
                erreurNumero.innerHTML = ''; // Effacer le message d'erreur
                return true;
            } else {
                erreurNumero.innerHTML = 'Le numéro de téléphone doit être au format guinéen (9 chiffres).';
                return false;
            }
    }

    // verification du champ image
    function validerImage() {
            // Récupérer le chemin du fichier
            var cheminFichier = document.getElementById('Photo').value;
            // Extraire l'extension du fichier
            var extension = cheminFichier.split('.').pop().toLowerCase();
            // Liste des extensions autorisées
            var extensionsAutorisees = ['jpg', 'jpeg', 'png', 'svg'];
            // Récupérer l'élément pour afficher les erreurs
            var erreurImage = document.getElementById('erreurImage');
            // Tester si l'extension est autorisée
            if (extensionsAutorisees.indexOf(extension) !== -1) {
                erreurImage.innerHTML = ''; // Effacer le message d'erreur
                return true;
            } else {
                erreurImage.innerHTML = 'Le format de l\'image doit être jpg, jpeg, png ou svg.';
                return false;
            }
    }

    // validation et concordance des deux mot de passe 
    function validerMotDePasse() {
            // Récupérer les valeurs des champs de mot de passe
            var motDePasse = document.getElementById('MotDePasse').value;
            var confirmationMotDePasse = document.getElementById('confirmationMotDePasse').value;

            // Récupérer l'élément pour afficher les erreurs
            var erreurMotDePasse = document.getElementById('erreurMotDePasse');
            var ConfirmationMotDePasse = document.getElementById('ConfirmationMotDePasse');
            // Vérifier la longueur du mot de passe
            if (motDePasse.length <= 8) {
                erreurMotDePasse.innerHTML = 'Le mot de passe doit avoir minimum 8 caractères.';
                return false; 
            }else{

                erreurMotDePasse.innerHTML = "";
                return true;
            }
            // Tester si les mots de passe correspondent
            if (motDePasse === confirmationMotDePasse) {
                ConfirmationMotDePasse.innerHTML = ''; // Effacer le message d'erreur
                return true;
            } else {
                ConfirmationMotDePasse.innerHTML = 'Les mots de passe ne correspondent pas.';
                return false;
            }
    }

        function ValiderFormulaire() {

            var numeroValide = validerNumero();
            var motDePasseValide = validerMotDePasse();
            var ImageValide = validerImage();

            if (numeroValide && motDePasseValide && ImageValide) {
                return true; // Autoriser la soumission du formulaire
            } else {
                return false; // Empêcher la soumission du formulaire
            }
            
        }
     </script>
    @yield('js')
</body>
</html>