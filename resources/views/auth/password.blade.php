@extends('layout.master')

@section('content')


    <form class="sky-form" role="form" method="POST" action="/password/email">
        <header>Reset Password</header>
        <fieldset>
            <section>
                <div class="row">
                    <label class="label col col-4">Email</label>

                    <div class="col col-8">
                        <label class="input">
                            <i class="icon-append fa fa-lock"></i>
                            <input type="email" name="email" placeholder="E-Mail">
                        </label>
                    </div>
                </div>
            </section>
        </fieldset>
        <footer>
            <button type="submit" class="btn-u">Reset Password</button>
        </footer>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>


@stop
