<template>
    <div class="flex  items-center" >
    <form action="" class=" p-4 grid grid-cols-2 gap-4" @submit="onSubmit" method="post" ref="myForm">
        <div class="col-start-1"><label for="photo"  class="col-start-1" >Image : </label></div>
        <div class="col-start-2">
            <div class="flex items-center">
                <input-image v-model="redacteur.file" :pathImage="'/images/redacteurs/'+redacteur.image"
                :class="{'w-32 h-32 border':true,'border-red-600':messages.photo}" />
                <span class=" w-64 p-4">
                    cliquer sur l'image pour changer
                </span>
            </div>
            <message-input :messageItem="messages.photo" :status="status"  />

        </div>

        <div class="col-start-1"><label for="name"  class="col-start-1" >Nom : </label></div>
        <div class="col-start-2">
            <input type="text" v-model="redacteur.name"  :class="{'':true,'border-red-600':messages.name}">
            <message-input :messageItem="messages.name" :status="status"  />
        </div>

        <div class="col-start-1"><label for="email"  class="col-start-1" >Email : </label></div>
        <div class="col-start-2">
            <input type="text" v-model="redacteur.email" :class="{'':true,'border-red-600':messages.email}">
            <message-input :messageItem="messages.email" :status="status"  />
        </div>

        <div class="col-start-1"><label for="Moy de Passe"  class="col-start-1" >Mot de Passe : </label></div>
        <div class="col-start-2">
            <input type="text" v-model="redacteur.pwd" :class="{'':true,'border-red-600':messages.pwd}">
            <message-input :messageItem="messages.pwd" :status="status"  />
        </div>

        <div class="col-start-1"><label for="confirmation"  class="col-start-1" >Confirmation MDP : </label></div>
        <div class="col-start-2">
            <input type="text" v-model="redacteur.pwd_confirmation" :class="{'':true,'border-red-600':messages.pwd}">
        </div>
        <button type="submit" ref="valider" class="hidden"> submit</button>

    </form>

    </div>
</template>

<script>
import ChoixCouleur from '@/MyComponent/Input/ChoixCouleur.vue'
import SimpleButton from '../Input/SimpleButton.vue'
import axios from 'axios';
import MessageInput from '../Input/MessageInput.vue';
import InputImage from '../Input/InputImage.vue';
export default {
  components: { ChoixCouleur, SimpleButton, MessageInput, InputImage },
    props:['redacteur','redirect','mode'],
    data(){
        return {
            messages:{
                name:'',
                email:"",
                pwd:'',
            },
            status:false,
        };
    },
    methods:{
        submitForm(){
            this.$refs.valider.click();
        },
        onSuccess(res){
            this.status=res.status;
            if(res.status){
                this.messages={};
                if(this.redirect){
                    window.location.href=this.redirect
                }

            }else{
                this.messages=res.messages;
            }
        },
        onSubmit(event){
            console.log('form-create-redacteur');
            console.log(this.redacteur);
            event.preventDefault();
            let formdata= new FormData();
            for(let key in this.redacteur){
                formdata.append(r,this.redacteur[key])
            }
            if(this.mode=="create"){
                axios.post('/lougare_npl/redacteur',formdata,{headers: {"Content-Type": "multipart/form-data",},})
                .then(res=>{
                    this.onSuccess(res.data);

                }).catch(err=>{

                });
            }
            else if(this.mode=='edit'){
                axios.put('/lougare_npl/redacteur',formdata,{headers: {"Content-Type": "multipart/form-data",},})
                .then(res=>{
                    this.onSuccess(res.data);

                }).catch(err=>{

                });
            }
        },

    },
    mounted(){
    // this.$refs.myForm.addEventListener('submit',this.onSubmit);
    }

}
</script>

<style>

</style>
