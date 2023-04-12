@extends('layouts.layout')
@section('title','Home')
@section('content') 

        <div class="">
            <div class="text-center"></div>
            <img src={{ asset('images/dp.jpg') }} alt="" class="img-thumbnail" width="250px" height="150px">
        </div>
        <div class="mt-5 text-white mx-5 text-justify">
            <h1 class="fw-bold st-font">Hello</h1>
            <div class="px-4">
                <p class="text-warning">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti vel voluptatem, tenetur
                    necessitatibus aliquam officiis iusto, numquam similique dolores, quos molestiae tempora eligendi
                    soluta quae consequatur exercitationem cumque. Facere, itaque! Natus quos, architecto ab rerum a
                    blanditiis incidunt doloribus cum cupiditate aliquam facere molestias eos magnam in libero similique
                    doloremque officia tempore repellendus earum optio amet id nobis omnis? Ea facilis adipisci
                    veritatis animi recusandae repellat asperiores qui magni corporis eum consequuntur, alias dolore
                    facere dolor assumenda nobis? Hic exercitationem deserunt voluptatibus voluptas, fugiat molestiae
                    perspiciatis velit ullam rerum consectetur illo ut, modi neque facere, harum eaque architecto? Quae
                    nobis alias quod accusantium placeat fuga a laboriosam officia recusandae magnam beatae nesciunt
                    dignissimos esse, non ipsa vel! Nemo nostrum, esse pariatur consectetur accusamus accusantium rem
                    adipisci voluptate asperiores consequuntur cum dicta vero magni quidem illo iste saepe perferendis
                    est. Possimus natus vitae reprehenderit earum illo maiores ut, aliquam dolorem quidem nemo,
                    adipisci, impedit explicabo recusandae totam esse nam. Beatae et amet, a dolor illo assumenda,
                    maiores rem odio hic ab soluta, fuga vero. A nesciunt ea minus doloremque. Officiis atque quam nam
                    aliquid, id officia laudantium ratione minus eveniet error voluptates repellat, doloribus cum dicta
                    dolorum eaque temporibus. Aut, cupiditate!
                </p>
            </div>
            <div class="text-center">
                <a href={{ route('contact') }} class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
                <a href={{ route('contact')}} class="btn btn-outline-info">Contact</a>
            </div>
        </div>

            @endsection