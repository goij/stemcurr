<div class="panel-group acc-v1" id="accordion-1">
@foreach($categories as $category)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#{!!$category!!}">
                        {!!$category!!}
                    </a>
                </h4>
            </div>
            <div id="{!!$category!!}" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="row">
                        What
                    </div>
                </div>
            </div>
        </div>
@endforeach
</div>