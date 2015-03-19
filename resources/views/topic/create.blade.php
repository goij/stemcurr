@extends('layout.master')
@section('content')
    <?php
    use App\Grade;
    use App\Unit;
    ?>
    <div class="panel panel-red">
        <div class="panel-heading">
            <a data-toggle="collapse" data-target="#collapse-search" href="#" style="text-decoration: none">
                <h2 class="heading color-light">Create New topics</h2>
            </a>
        </div>
        <div id="collapse-search" class="panel-collapse">
            <div class="panel-body">
                <form action="" class="sky-form" method="post">
                    <fieldset>
                        <div class="col-md-6">
                            <section>
                                <label class="label">Grade Level</label>
                                <label class="select">
                                    <select name="grade_id">
                                        <option value="1" default>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                    <i></i>
                                </label>
                            </section>
                        </div>
                        <div class="col-md-6">
                            <section>
                                <label class="label">Unit</label>
                                <label class="select">
                                    <select name="unit_id">
                                        <option value="1" default>Geology & Space</option>
                                        <option value="2">Matter & Energy</option>
                                        <option value="3">Force & Motion</option>
                                        <option value="4">Weather & Climate</option>
                                        <option value="5">Structure & Function</option>
                                        <option value="6">Ecosystems & Adaptations </option>
                                    </select>
                                    <i></i>
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
                            <label class="label">Summary</label>
                            <label class="textarea">
                                <textarea name="summary" value="" placeholder="Summary" rows="5"></textarea>
                            </label>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label class="label">Commentary</label>
                            <label class="textarea">
                                <textarea name="commentary" value="" placeholder="Commentary" rows="5"></textarea>
                            </label>
                        </div>

                    </fieldset>
                    <footer>
                        <div class="col-md-6 col-sm-12">
                            <button type="submit" class="btn-u btn-u-green btn-block curl-bottom-right">Create topic</button>
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
