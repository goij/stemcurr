@extends('layout.master')

@section('content')

    <form class="sky-form" role="form" method="POST" action="/password/email">
        <header>Send Password Reset E-Mail</header>
        <fieldset>
            <section>
                <div class="row">
                    <label class="label col col-4">Email</label>

                    <div class="col col-8">
                        <label class="input">
                            <i class="icon-append fa fa-user"></i>
                            <input type="email" name="email" placeholder="E-Mail">
                            <b class="tooltip tooltip-bottom-right">E-Mail address you signed up with</b>
                        </label>
                    </div>
                </div>
            </section>
        </fieldset>
        <footer>
            <button type="submit" class="btn-u">Send E-Mail</button>
        </footer>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">


    </form>

@stop
