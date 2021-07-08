<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <!-- <div class="card-body">
                      
                    {{transalte()(   "messages.whatis@what.com" )}}
                    </div> -->

                      <h3 class="card-body">
                      
                       {{ transalte() }}
                    </h3>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                sign: "__('messages.whatis@what.com')",
            }
        },


        methods: {
            transalte(){
                return this.sign;

            }
        },
        mounted() {
            console.log('Component mounted.')
        }


    }
</script>
