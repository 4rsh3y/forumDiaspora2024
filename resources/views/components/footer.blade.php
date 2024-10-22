<footer class="pt-9 text-center text-white position-relative z-1">
    <div class="overlay z-n1 start-0"></div>
    <div class="container">
        <div class="footer-content w-lg-50 m-auto">
            <div class="footer-logo mb-4 pt-1">
                <a href="{{route("Accueil")}}">
                    <img src="assets/images/logo/1.png" class="w-100" alt="footer-logo">
                </a>
            </div>
            <div class="footer-disciption border-bottom border-white border-opacity-25 m-auto mb-6">
               
            </div>
            <div class="footer-menu pb-9">
                <ul class="p-0 m-0">
                    <li class="d-inline mx-2"><a href="{{route('Accueil')}}"><small>Accueil</small></a></li>
                    <li class="d-inline mx-2"><a href="{{route('Panelistes')}}"><small>Nos panelistes</small></a></li>
                    <li class="d-inline mx-2"><a href="{{route('Activities')}}"><small>Calendrier & activités</small></a></li>
                    <li class="d-inline mx-2"><a href="{{route("contact")}}"><small>Contact</small></a></li>
                </ul>
            </div>
        </div>
        <div class="copyright pb-6 pt-1">
            <small>Copyright &#169; <span id="annee"></span> |         
                Forum de la Diaspora Ivoirienne. Tous droits réservés</small>
        </div>
    </div>
</footer>

<div id="back-to-top">
    <a href="#" class="bg-pink position-relative align-items-center rounded-circle d-block"></a>
</div>

<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/custom-nav.js')}}"></script>
<script src="{{asset('assets/js/plugin.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/accordion.js')}}"></script>
<script src="{{asset('assets/js/rgpd.js')}}"></script>
<script>

    document.getElementById('annee').textContent = new Date().getFullYear();

    document.addEventListener('DOMContentLoaded', function() {
      var user = 'infos';
      var domain = 'forum2024.ci';
      var email = user + '@' + domain;
      var emailLink = document.getElementById('emailLink');
      
      emailLink.href = 'mailto:' + email;
      emailLink.innerHTML = email;
    });
  </script>
</body>


</html>