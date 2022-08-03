<template>
    <div class="flex  items-center" >
    <form action="" class=" p-4 grid grid-cols-2 gap-4" @submit="onSubmit" method="post" ref="myForm">
        <div class="col-start-1"><label for="name"  class="col-start-1" >Image : </label></div>
        <div class="col-start-2">
            <input-image v-model="redacteur.file" :pathImage="'/images/redacteurs/'+redacteur.image" :class="{'col-start-2':true,'border-red-600':messages.photo}">
            <message-input :messageItem="messages.photo" :status="status"  />
        </div>

        <div class="col-start-1"><label for="name"  class="col-start-1" >Nom : </label></div>
        <div class="col-start-2">
            <input type="text" v-model="redacteur.name"  :class="{'col-start-2':true,'border-red-600':messages.name}">
            <message-input :messageItem="messages.name" :status="status"  />
        </div>

        <div class="col-start-1"><label for="email"  class="col-start-1" >Email : </label></div>
        <div class="col-start-2">
            <input type="text" v-model="redacteur.email" class="col-start-2" :class="{'border-red-600':messages.email}">
            <message-input :messageItem="messages.email" :status="status"  />
        </div>

        <div class="col-start-1"><label for="Moy de Passe"  class="col-start-1" >Mot de Passe : </label></div>
        <div class="col-start-2">
            <input type="text" v-model="redacteur.pwd" class="col-start-2" :class="{'border-red-600':messages.pwd}">
            <message-input :messageItem="messages.pwd" :status="status"  />
        </div>

        <div class="col-start-1"><label for="confirmation"  class="col-start-1" >Confirmation MDP : </label></div>
        <div class="col-start-2">
            <input type="text" v-model="redacteur.pwd_confirmation" class="col-start-2" :class="{'border-red-600':messages.pwd}">
        </div>
        <button type="submit" ref="valider" class=""> submit</button>

    </form>
    <div class=""  >
        <div class="px-4 py-1 text-4xl ml-8" :style="{'background-color':redacteur.couleur_fond,'color':redacteur.couleur_txt}">
            {{redacteur.id}}
        </div>
    </div>
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
                formdata.append(r,this.redacteur[r])
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
