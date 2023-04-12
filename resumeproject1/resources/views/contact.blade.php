<x-layout>
    <x-slot name="title">Contact</x-slot>
    <x-slot name="content">
        <div class="container mt-5">
            <h1 class="text-warning mb-5 border-bottom">CONTACT US</h1>
            <div class="row text-white mb-5">
                <p class="mx-auto mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi consequuntur
                    ratione commodi nobis? Aliquid reprehenderit, necessitatibus molestias, repellat laudantium harum
                    minima adipisci temporibus dicta quae nesciunt odit officia sed inventore</p>
                <div class="col-sm-9 mb-5">
                    <form action="">
                        <div class="row g-3">
                            <div class="col-md-6">

                                <label for="inputName">Your Name</label>
                                <input type="text" class="form-control mt-2" id="inputName">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail">Your Email</label>
                            <input type="email" class="form-control mt-2" id="inputEmail" required>
                        </div>
                        <div class="col-md-12">
                            <label for="inputSubject">Your Subject</label>
                            <input type="text" class="form-control mt-2" id="inputSubject">
                        </div>
                        <div class="col-md-12 mb-3"><label for="inputTextarea">Your message</label>
                            <textarea id="inputTextarea" class="form-control mt-2" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3 text-center">
                    <ul>
                        <li>
                            <i class="fas fa-map-marker-alt fa-2x i-color"></i>
                            <p>Ranchi,Jharkhand ,India</p>
                        </li>
                        <li>
                            <i class="fas fa-phone mt-4 fa-2x i-color"></i>
                            <p>+91 000000000</p>
                        </li>
                        <li>
                            <i class="fas fa-envelope mt-4 fa-2x i-color"></i>
                            <p>contact@email.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href=""><i class="fab fa-twitter i-color"></i></a>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-instagram i-color"></i></a>
            <a href=""><i class="fab fa-dribble i-color"></i></a>
        </div>
    </x-slot>
</x-layout>
