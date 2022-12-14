@extends('layouts.core')
@section('content')
        <!-- jumbotron -->
        <section class="jumbotron text-center">
        	<div class="container">
	            <img src="https://image.winudf.com/v2/image/Y29tLmJhbGVmb290Lk1vbmtleURMdWZmeVdhbGxwYXBlcl9zY3JlZW5fMF8xNTI0NTE5MTEwXzAyOA/screen-0.jpg?h=500&fakeurl=1&type=.jpg" alt="Abd Rozak Chaidir" width="200px" class="rounded-circle img-thumbnail">
	            <h1 class="display-4">Sahrul Gunawan</h1>
	            <p class="lead">Programmer | Back-End Developer</p>
	            <div class="row text-center justify-content-center">
	            	<div class="col-md-2 pb-2"><a href="https://www.facebook.com/sahruldxd/" target="_blank" class="text-black"><i class="bi bi-facebook"></i> Facebook</a></div>
	            	<div class="col-md-2 pb-2"><a href="https://www.linkedin.com/in/sahrul-gunawan-6404191b8/" target="_blank" class="text-black"><i class="bi bi-linkedin"></i> Linkedin</a></div>
	            	<div class="col-md-2 pb-2"><a href="https://github.com/SahrulGnwn" target="_blank" class="text-black"><i class="bi bi-github"></i> Github</a></div>
	            	<div class="col-md-2 pb-2"><a href="mailto:sahrulgunawan385@gmail.com" target="_blank" class="text-black"><i class="bi bi-envelope"></i> Email</a></div>
	            </div>
	        </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,69.3C274.3,75,343,117,411,144C480,171,549,181,617,170.7C685.7,160,754,128,823,106.7C891.4,85,960,75,1029,69.3C1097.1,64,1166,64,1234,80C1302.9,96,1371,128,1406,144L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
            </svg>
        </section>
        <!-- end jumbotron -->
        <!-- about -->
        <section id="about">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col">
                        <h2>About Me</h2>
                        <p class="fs-5">Junior Back End Developer with PHP Laravel and Python Django</p>
                    </div>
                </div>
                <div class="row text-center mb-2 mt-5">
                    <div class="col">
                        <h2>Skills</h2>
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-outline-primary fw-bold mb-2">HTML</button>
                    <button type="button" class="btn btn-outline-primary fw-bold mb-2">REST API</button>
                    <button type="button" class="btn btn-outline-primary fw-bold mb-2">PHP</button>
                    <button type="button" class="btn btn-outline-primary fw-bold mb-2">Laravel</button>
                    <button type="button" class="btn btn-outline-primary fw-bold mb-2">Python</button>
                    <button type="button" class="btn btn-outline-primary fw-bold mb-2">Django</button>
                    <button type="button" class="btn btn-outline-primary fw-bold mb-2">Node JS</button>
                    <button type="button" class="btn btn-outline-primary fw-bold mb-2">MySQL</button>
                    <button type="button" class="btn btn-outline-primary fw-bold mb-2">PostgreSQL</button>
                    <button type="button" class="btn btn-outline-primary fw-bold mb-2">Git</button>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e2edff" fill-opacity="1" d="M0,288L34.3,272C68.6,256,137,224,206,202.7C274.3,181,343,171,411,176C480,181,549,203,617,218.7C685.7,235,754,245,823,250.7C891.4,256,960,256,1029,245.3C1097.1,235,1166,213,1234,213.3C1302.9,213,1371,235,1406,245.3L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
            </svg>
        </section>
        <!-- end about -->
        <!-- portofolio -->
        <section id="portofolio" class="portofolio">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col">
                        <h2>Portofolio</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ url("/assets/img/LoginRegisSystem.png") }}" class="card-img-top img-thumbnail porto-image" alt="loginregis">
                            <div class="card-body">
                                <h4>Login/Register System</h4>
                                <p class="card-text">Aplikasi untuk melakukan login maupun register</p>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{route('login')}}">View Demo</a></button>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ url("/assets/img/RestAPI.png") }}" class="card-img-top img-thumbnail porto-image" alt="REST API WITH CRUD">
                            <div class="card-body">
                                <h4>REST API with CRUD</h4>
                                <p class="card-text">Aplikasi API Mahasiswa</p>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{route('dashboard')}}">View Demo</a></button>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ url("/assets/img/LiveChat.png") }}" class="card-img-top img-thumbnail porto-image" alt="REST API WITH CRUD">
                            <div class="card-body">
                                <h4>Simple Live Chat</h4>
                                <p class="card-text">Aplikasi Real-time Chat dengan Pusher</p>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{route('livechat.index')}}">View Demo</a></button>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1" d="M0,320L34.3,309.3C68.6,299,137,277,206,256C274.3,235,343,213,411,202.7C480,192,549,192,617,208C685.7,224,754,256,823,261.3C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,186.7C1302.9,192,1371,224,1406,240L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
            </svg>
        </section>
        <!-- end portofolio -->
        <!-- contact -->
        <section id="contact">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col">
                        <h2>Contact Me</h2>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <a href="https://wa.me/6285771100462" target="_blank"><img src="https://dawaipagi.github.io/img/wa.png" width="100"></a>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#0d6efd" fill-opacity="1" d="M0,192L34.3,197.3C68.6,203,137,213,206,202.7C274.3,192,343,160,411,133.3C480,107,549,85,617,106.7C685.7,128,754,192,823,186.7C891.4,181,960,107,1029,96C1097.1,85,1166,139,1234,160C1302.9,181,1371,171,1406,165.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
            </svg>
        </section>
        <!-- end contact -->
@endsection
