@extends('layouts.master')
@section('body-content')

{{-- @foreach ($bhrau_page as $bhrau)
    {!! html_entity_decode($bhrau->content_one) !!}
    {!! html_entity_decode($bhrau->content_two) !!}
    {!! html_entity_decode($bhrau->content_three) !!}
@endforeach --}}
<div class="d-flex justify-content-center flex-column">
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-12 col-lg-8">
                <p class="mx-5 fs-5">AS a developing country, it's human rights are ignored by the service oriented department. People are being denied their rights. The Bangladesh Human Rights Action Unit (BHRAU) is working to confirm human fundamental rights at its all levels.<br><br>
                Steps taken by Bangladesh Human Rights Action Unit to protect human rights -<br>
                1. Highlighting human rights.<br>
                2. To ensure the right to know human rights.<br>
                3. Ensuring human rights.<br>
                4. Provide information on human rights.<br>
                5. To establish human justice through village arbitration center.
                </p>
            </div>
            <div class="col-4 p-0 d-none d-lg-block">
                <img src="/images/articles/article.jpg" class="w-100">
            </div>
        </div>
    </div>
    <p class="fs-4 border-bottom border-3 fw-semibold ms-5">UN Human Rights Declaration of 30 articles of rights are: Introductory articles:</p>
    <div class="container articles my-3">
        <div class="row">
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/bornequal.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">We are all born free and equal</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/free_from_discrimination.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Freedom from Discrimination</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/righttolife.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to Life</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/free_slavery.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Freedom from Slavery</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/free_torture.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Freedom from Torture</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/rec_before_law.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to Recognition Before the Law</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/eq_before_law.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to Equality Before the Law</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/r_to_remedy.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to Remedy</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/free_arbitrary.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Freedom from Arbitrary Detention</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/fair_trial.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to a Fair Trial</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/presumption_of_innocence.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Presumption of Innocence and International Crimes</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/r_to_privacy.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to Privacy</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/free_movements.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Freedom of Movement</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/r_to_asylum.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to Asylum</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/r_to_nationality.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to Nationality</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/r_to_marry.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to Marry and to Find a Family</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/r_to_property.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to Own Property</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/free_religion.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Freedom of Religion or Belief</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/freedom_of_speech.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Freedom of Opinion and Expression</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/free_assembly.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Freedom of Assembly and Association</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/democracy.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">A Short Course in Democracy</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/social_security.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to Social Security</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/r_to_work.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to Work</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/article.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to Rest and Leisure</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/r_to_rest.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to Adequate Standard of Living</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/r_to_education.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to Education</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/culture.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to Cultural, Artistic and Scientific Life</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/free_world.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Right to a Free and Fair World</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/duty.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Duty to Your Community</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 bg-body-tertiary">
                <div class="card w-100">
                    <img src="/images/articles/inaliable.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text fw-semibold">Rights are Inalienable</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
