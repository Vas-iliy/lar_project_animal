<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4 mb-5">
                <h3>About The Breed</h3>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.</p>
                <ul class="list-unstyled footer-link d-flex footer-social">
                    <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
                </ul>

            </div>
            @if($contacts)
                <div class="col-md-5 mb-5">
                    <h3>Contact Info</h3>
                    <ul class="list-unstyled footer-link">
                        @foreach($contacts as $contact)
                            <li class="d-block">
                                <span class="d-block">{{$contact->icon}}</span>
                                <span class="text-white">{{$contact->descr}}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if($menus)
                <div class="col-md-3 mb-5">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled footer-link">
                        @foreach($menus as $m)
                            <li><a href="{{$m->path}}">{{$m->page}}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-12 text-md-center text-left">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
