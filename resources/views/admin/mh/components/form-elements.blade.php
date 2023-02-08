<div class="form-group row align-items-center" :class="{'has-danger': errors.has('codigo'), 'has-success': fields.codigo && fields.codigo.valid }">
    <label for="codigo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mh.columns.codigo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.codigo" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('codigo'), 'form-control-success': fields.codigo && fields.codigo.valid}" id="codigo" name="codigo" placeholder="{{ trans('admin.mh.columns.codigo') }}">
        <div v-if="errors.has('codigo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('codigo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('proyecto'), 'has-success': fields.proyecto && fields.proyecto.valid }">
    <label for="proyecto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mh.columns.proyecto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.proyecto" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('proyecto'), 'form-control-success': fields.proyecto && fields.proyecto.valid}" id="proyecto" name="proyecto" placeholder="{{ trans('admin.mh.columns.proyecto') }}">
        <div v-if="errors.has('proyecto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('proyecto') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('documento'), 'has-success': fields.documento && fields.documento.valid }">
    <label for="documento" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mh.columns.documento') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.documento" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('documento'), 'form-control-success': fields.documento && fields.documento.valid}" id="documento" name="documento" placeholder="{{ trans('admin.mh.columns.documento') }}">
        <div v-if="errors.has('documento')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('documento') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('adjudicatario'), 'has-success': fields.adjudicatario && fields.adjudicatario.valid }">
    <label for="adjudicatario" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mh.columns.adjudicatario') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.adjudicatario" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('adjudicatario'), 'form-control-success': fields.adjudicatario && fields.adjudicatario.valid}" id="adjudicatario" name="adjudicatario" placeholder="{{ trans('admin.mh.columns.adjudicatario') }}">
        <div v-if="errors.has('adjudicatario')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('adjudicatario') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha_ins'), 'has-success': fields.fecha_ins && fields.fecha_ins.valid }">
    <label for="fecha_ins" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mh.columns.fecha_ins') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha_ins" :config="datetimePickerConfig" v-validate="" class="flatpickr" :class="{'form-control-danger': errors.has('fecha_ins'), 'form-control-success': fields.fecha_ins && fields.fecha_ins.valid}" id="fecha_ins" name="fecha_ins" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha_ins')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha_ins') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('institucion_acreedora'), 'has-success': fields.institucion_acreedora && fields.institucion_acreedora.valid }">
    <label for="institucion_acreedora" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mh.columns.institucion_acreedora') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.institucion_acreedora" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('institucion_acreedora'), 'form-control-success': fields.institucion_acreedora && fields.institucion_acreedora.valid}" id="institucion_acreedora" name="institucion_acreedora" placeholder="{{ trans('admin.mh.columns.institucion_acreedora') }}">
        <div v-if="errors.has('institucion_acreedora')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('institucion_acreedora') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('obs'), 'has-success': fields.obs && fields.obs.valid }">
    <label for="obs" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mh.columns.obs') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.obs" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('obs'), 'form-control-success': fields.obs && fields.obs.valid}" id="obs" name="obs" placeholder="{{ trans('admin.mh.columns.obs') }}">
        <div v-if="errors.has('obs')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('obs') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha_reins'), 'has-success': fields.fecha_reins && fields.fecha_reins.valid }">
    <label for="fecha_reins" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.mh.columns.fecha_reins') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha_reins" :config="datetimePickerConfig" v-validate="" class="flatpickr" :class="{'form-control-danger': errors.has('fecha_reins'), 'form-control-success': fields.fecha_reins && fields.fecha_reins.valid}" id="fecha_reins" name="fecha_reins" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha_reins')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha_reins') }}</div>
    </div>
</div>


