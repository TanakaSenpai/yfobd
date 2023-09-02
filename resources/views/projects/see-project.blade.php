@extends('layouts.master')
@section('body-content')

{{-- @foreach ($see_post_page as $see_post)
    {!! html_entity_decode($see_post->content_one) !!}
    {!! html_entity_decode($see_post->content_two) !!}
    {!! html_entity_decode($see_post->content_three) !!}
@endforeach --}}

<section class="see-post-content-one">
<div class="post-body mx-3 mx-lg-5 px-lg-5 mb-5">
    <div class="post-img-container mb-5">
        <div class="post-img w-100" style="background-image: url(/images/projects/{{ $img }}.jpg)">
            <div class="overlay d-flex flex-column p-3">
                <p class="text-white fs-5 fw-semibold page-title">Home / Projects / {{ ucwords($project) }}</p>
                <div class="post-img-txt my-2 mx-3 m-lg-5">
                    <h1 class="text-white pr-name mb-3 mb-md-5 fw-bold">{{ ucwords($project) }}</h1>
                    <p class="post-title pt-md-5 text-white fw-bold fs-3">We are currently working on this project. We hope for your support to acomplish our missions. We are trying our best.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="see-post-content-two mb-5">
    <div class="post-details mx-5">
        <div class="d-flex flex-column justify-content-center">
            <h6>
                At a time when unprecedented heatwaves are gripping many regions of the world, today’s event highlighted how urgent action is needed to deliver sustainable cooling solutions that will protect people without hastening climate change.<br><br>Several ministers and high-level representatives rallied behind the Global Cooling Pledge, its calls to action on sustainable cooling, and the steps the global community must take to achieve a “Cool COP28”, specifically one that sparks commitments towards improving sustainable cooling access.<br><br>
                細ロセ趣民スアウエ瓦税イちゆ定表セアマイ物終ト訪葉よ前姿モネワマ経年ケエヨウ部写今ヨハセサ健名コヒユレ畑4作レぶそを商帯よでく上痢チ改得でめず。稿いまと読待ゅ門経安秋分ムテ署提かよしそ変掲ナユヒハ題由はつト読幹レ料28準ホキヱ活夕ぞと明完キミヱハ岩予現ぐ。筋肥供事ヨヌオタ展止手ーけつ全朝ぴあル持設ゃゅりト作時ょてド越武たス約勝り柔供ぞどゆリ楽野ヒ番18反念冒9俣妃ぽすび。<br><br> 初ユス芸実ケヲ治夫いルがき億忠技三イぱへあ要使ヒト再次ムタセナ図符ヤ供況ゅ拠竹終ワ恐模はリさ廃事やい間情ょみぎ九利ヘミシラ世調な見5業めじたる。虎リナ読打てぶべだ立約シネヱマ録面ワセ易23暮技ふゅほれ獲置1作でみ窒験ロテ判打あリゅ五9据途はへもり紙他ゆ情訪読ケスシ党仕ま。
            </h6>
            <div class="post-second-img mx-auto lh-1 mb-4">
                <img class="mt-4 mb-2 mx-auto w-100" src="https://picsum.photos/800/400">
                <em>From left to right: Shri Abhay Bakre (Government of India); Dr. Sultan al Jaber (UAE); Ligia Noronha (UNEP); Dr. Jitendra Singh (Government of India); Dan Jørgensen (Government of Denmark); Damilola Ogunbiyi (SEforALL); Rohit Monserrate (City of Panaji)</em>
            </div>
            <h6>
                “This voluntary pledge offers state and non-state actors a unique chance to enhance voluntary commitments to climate mitigation, adaptation, resilience and investments towards sustainable cooling,” <b>highlighted Ms. Ligia Noronha, UN Assistant Secretary-General and Head of the New York Office UNEP</b><br><br>

                Previewed earlier this year, it calls for progress on nature-based solutions, super-efficient appliances, food and vaccine cold chains, district cooling, and National Cooling Action Plans, among others.<br><br>

                During this High-Level Dialogue organized alongside G20 Energy Transition Ministerial in Goa, Dr. Sultan al Jaber, COP28 President-Designate and the UAE’s Special Envoy for Climate Change, said, “We have a unique opportunity to deliver a significant collective response to the cooling challenge via this very important initiative – the Global Cooling Pledge. This Pledge aims to improve efficiency and increase access to sustainable cooling. It is gaining momentum, with more than 20 early supporters, including India and Denmark.”
            </h6>
        </section>


        <section class="see-post-content-three">

        </section>

@endsection


