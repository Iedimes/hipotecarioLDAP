@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.mh.actions.edit', ['name' => $mh->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <mh-form
                :action="'{{ $mh->resource_url }}'"
                :data="{{ $mh->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.mh.actions.edit', ['name' => $mh->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.mh.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </mh-form>

        </div>
    
</div>

@endsection