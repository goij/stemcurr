@extends('layout.master')
@section('content')
    <?php
    use App\Grade;
    use App\Unit;
    ?>
    <div class="panel panel-red">
        <div class="panel-heading">
            <a data-toggle="collapse" data-target="#collapse-search" href="#" style="text-decoration: none">
                <h2 class="heading color-light">Create New Questions</h2>
            </a>
        </div>
        <div id="collapse-search" class="panel-collapse">
            <div class="panel-body">
                <form action="" class="sky-form" method="post">
                    <fieldset>
                        <div class="col-md-12">
                            <section>
                                <label class="label">Lesson ID</label>
                                <label class="input">
                                        <input type="text" name="lesson_id" placeholder="Lesson ID">
                                </label>
                            </section>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label class="label">Title</label>
                            <label class="input">
                                <input type="text" name="title" placeholder="title">
                            </label>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label class="label">Evidence</label>
                            <label class="textarea">
                                <textarea name="evidence" placeholder="Evidence of Learning" rows="5"></textarea>
                            </label>
                        </div>
                    </fieldset>
                    <footer>
                        <div class="col-md-6 col-sm-12">
                            <button type="submit" class="btn-u btn-u-green btn-block curl-bottom-right">Create Question</button>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <button type="clear" class="btn-u btn-u-red btn-block curl-bottom-right">Clear</button>
                        </div>
                    </footer>
                    {!!Form::token()!!}
                </form>
            </div>
        </div>
    </div>
@stop
