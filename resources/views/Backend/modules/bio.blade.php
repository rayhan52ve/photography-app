@extends('Backend.layouts.master')

@section('content')
    <main class="mdl-layout__content ui-form-components">

        <div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h5 class="mdl-card__title-text text-color--white">Bio Info</h5>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <form method="post" action="{{route('admin.bio.store')}}" enctype="multipart/form-data" class="form form--basic" >
                            @csrf
                            <div class="mdl-grid">
                                <div
                                    class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone form__article">
                                    <h3 class="text-color--smooth-gray">Biopic</h3>
                                    <img src="{{ asset('asset/bio.jpg') }}" width="300px" 
                                        alt="Image Description">

                                </div>
                                <div
                                    class="mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone form__article">
                                    <h3 class="text-color--smooth-gray text-success">BIO INPUT FIELDS</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input name="name" class="mdl-textfield__input" type="text" value="{{@$bio->name}}" id="floating-first-name">
                                                <label class="mdl-textfield__label" for="floating-first-name">
                                                    Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input name="age" class="mdl-textfield__input" type="text" value="{{@$bio->age}}" id="floating-first-name">
                                                <label class="mdl-textfield__label" for="floating-first-name">Age</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input name="designation" class="mdl-textfield__input" type="text" value="{{@$bio->designation}}" id="floating-first-name">
                                                <label class="mdl-textfield__label" for="floating-first-name">Designation</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input name="phone" class="mdl-textfield__input" type="number" value="{{@$bio->phone}}" id="floating-first-name">
                                                <label class="mdl-textfield__label" for="floating-first-name">Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input name="email" class="mdl-textfield__input" type="email" value="{{@$bio->email}}" id="floating-first-name">
                                                <label class="mdl-textfield__label" for="floating-first-name">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input name="city" class="mdl-textfield__input" type="text" value="{{@$bio->city}}" id="floating-first-name">
                                                <label class="mdl-textfield__label" for="floating-first-name">City</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input name="description" class="mdl-textfield__input" type="text" value="{{@$bio->description}}" id="floating-first-name">
                                                <label class="mdl-textfield__label" for="floating-first-name">Description</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <textarea class="mdl-textfield__input" id="floating-first-name" name="story" id="" rows="5">{{@$bio->story}}</textarea>
                                                <label class="mdl-textfield__label" for="floating-first-name">Your Story</label>
                                            </div>
                                        </div>

                                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal">
                                            SAVE
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </main>
@endsection
