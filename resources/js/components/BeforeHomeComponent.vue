<template>
    <div class="container">
     <div class="row justify-content-center">
        <div class="col-md-8" align="">
               
            <form @submit.prevent="saveData" class="form">
                                        <!-- @csrf -->
                                        <!-- <div class="form-group"> -->





                                            <!-- <div class="col-xs-6" align="">
                                                <label for="first_name"><h4>{{__('messages.Type')}}</h4></label>
                                                 <select v-model="form.type" class="form-control form-control-lg" id="exampleFormControlSelect1">
                                                         <option disabled value="">Select option</option>

                                                    <option value="Company">{{__('messages.Company')}}</option>
                                                    <option value="Jobseeker">{{__('messages.Jobseeker')}}</option>
                                                
                                                </select>
                                                @error('type')
                                                <span class="text-danger">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div> -->





                                        <div class="form-group" align="">
                                            <div class="col-xs-6">
                                                <label for="mobile"><h4>{{__('messages.Desc')}}</h4></label>
                                                <input v-model="form.user_desc" class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3">
                                                <!-- @error('desc')
                                                <span class="text-danger">{{$message}} </span>
                                                @enderror -->
                                            </div>
                                        </div>

                                               <div class="form-group" >
                                            <div class="col-xs-6">
                                                <label align="" for="mobile"><h4>{{__('messages.Type')}}</h4></label>
                                                <input v-model="form.type" class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3">
                                                <!-- @error('desc')
                                                <span class="text-danger">{{$message}} </span>
                                                @enderror -->
                                            </div>
                                        </div>
<!--                                   
                                        <div class="form-group" align="{{__('messages.align')}}">

                                            <div class="col-xs-6">
                                                <label for="email"><h4>{{__('messages.Email')}}</h4></label>
                                                <input type="email" value="{{$user->email}}" class="form-control form-control-lg" name="email" id="email" placeholder="{{__('messages.Email')}}" title="enter your email.">
                                                @error('email')
                                                <span class="text-danger">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div> -->
                                  


                                        <div class="form-group" align="">
                                            <div class="col-xs-12">
                                                <br>
                                                <button class="btn btn-lg btn-success" type="submit">{{__('messages.save')}}</button>

                                            </div>
                                        </div>
                                    </form>

            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
               
                editmode: false,
                form: new Form({
                     type: 'company',
                     user_desc: 'xxxxx',
                     id: 26
                    
                })
            }
        },


        methods: {
            saveData() {
                let data = new FormData();
                //console.log(FormData);
                data.append('type', this.form.type);
                data.append('user_desc', this.form.user_desc);
                axios.post('/user/more-info', data).then((res) => {
                    //  this.getTodos();
                     this.form.reset();
                }).catch((error) => {
                    this.form.errors.record(error.response.data.errors)
                    console.log(this.form.user_desc)
                })
            },

//             updateTodo(e) {
//                 this.editmode = false;

//                 let data = new FormData();
//                 data.append('_method', 'PATCH');
//  data.append('desc', e.desc);
//                 data.append('type', e.type);
               
//                 axios.post('/user/more-info/', data)
//                  .then(() => {})
//                  .catch((error) => {
//                     this.form.errors.record(error.response.data.errors)

//                  })
//             },
        
        },
        mounted() {
          
        },

        created() {
        },
          //  



    }

Vue.mixin(require('../trans'))

</script>

<style scoped>
form {
    width: 870px;
    height: 570px

}
</style>
