import AppForm from '../app-components/Form/AppForm';

Vue.component('mh-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                codigo:  '' ,
                proyecto:  '' ,
                documento:  '' ,
                adjudicatario:  '' ,
                fecha_ins:  '' ,
                institucion_acreedora:  '' ,
                obs:  '' ,
                fecha_reins:  '' ,
                
            }
        }
    }

});