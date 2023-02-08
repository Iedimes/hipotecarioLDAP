import AppListing from '../app-components/Listing/AppListing';

Vue.component('mh-listing', {
    mixins: [AppListing],
    methods: {
        deleteItem: function deleteItem(url) {
            var _this7 = this;

            this.$modal.show('dialog', {
                title: 'Atención!',
                text: '¿Desea eliminar este registro?',
                buttons: [{ title: 'No, cancelar.' }, {
                    title: '<span class="btn-dialog btn-danger">Si, borrar.<span>',
                    handler: function handler() {
                        _this7.$modal.hide('dialog');
                        axios.delete(url).then(function (response) {
                            _this7.loadData();
                            _this7.$notify({ type: 'success', title: 'Exito!', text: response.data.message ? response.data.message : 'Item successfully deleted.' });
                        }, function (error) {
                            _this7.$notify({ type: 'error', title: 'Error!', text: error.response.data.message ? error.response.data.message : 'An error has occured.' });
                        });
                    }
                }]
            });
        },
        //pickeitor: function pickeitor(){
        //    alert('pickeitor')
        //    console.log('el poro 69');
        //}
    }
});


