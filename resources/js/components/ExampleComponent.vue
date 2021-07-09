<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
               
               
                <h1> {{ __("messages.Post a job") }}</h1>
                               <h1> {{ __("messages.Are you") }}</h1>

                
                <h1> {{ __("messages.hell on earth") }}</h1>

            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                //sign: "__('messages.whatis@what.com')",
            }
        },


        methods: {
            // transalte(){
            //     return this.sign;

            // }
        },
        mounted() {
          
        },

        created() {
        },
          //  



    }

Vue.mixin(require('../trans'))

</script>
