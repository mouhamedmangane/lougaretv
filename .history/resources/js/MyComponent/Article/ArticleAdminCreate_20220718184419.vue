<template>
    <div class="flex  justify-between" >
    <form action="" class=" p-4 grid grid-cols-2 gap-4" @submit="onSubmit" method="post" ref="myForm">

        <div class="col-start-1"><label for="name"  class="col-start-1" >Titre : </label></div>
        <div class="col-start-2">
            <input type="text" v-model="article.titre"  :class="{'':true,'border-red-600':messages.name}" @keyup="messages.titre=false">
            <message-input :messageItem="messages.titre" :status="status"  />
        </div>

        <div class="col-start-1"><label for="email"  class="col-start-1" >Resume : </label></div>
        <div class="col-start-2">
            <textarea type="text" v-model="article.resume" :class="{'':true,'border-red-600':messages.email}" @keyup="messages.email=false"></textarea>
            <message-input :messageItem="messages.email" :status="status"  />
        </div>

        <div class="col-start-1"><label for="Mot de Passe"  class="col-start-1" >Categorie : </label></div>
        <div class="col-start-2">
            <select type="text" v-model="article.redacteur_id" :class="{'':true,'border-red-600':messages.pwd}" @keyup="messagse.pwd=false">
                <option :value="categorie.id" v-for="categorie in categories" :key="categorie.id">{{categorie.name}}</option>
            </select>
            <message-input :messageItem="messages.pwd" :status="status"  />
        </div>

        <div class="col-start-1"><label for="Mot de Passe"  class="col-start-1" >Redacteur : </label></div>
        <div class="col-start-2">
            <select type="text" v-model="article.redacteur_id" :class="{'':true,'border-red-600':messages.pwd}" @keyup="messagse.pwd=false">
                <option :value="redacteur.id" v-for="redacteur in redacteurs" :key="redacteur.id">{{redacteur.name}}</option>
            </select>
            <message-input :messageItem="messages.pwd" :status="status"  />
        </div>




        <div class="col-start-1"><label for="confirmation"  class="col-start-1" >Confirmation MDP : </label></div>
        <div class="col-start-2">
            <input type="text" v-model="article.pwd_confirmation" :class="{'':true,'border-red-600':messages.pwd}">
        </div>
        <button type="submit" ref="valider" class="hidden"> submit</button>

    </form>
    <div class=" ml-8 p-4">
        <div class="">
            <div class="">
                <input-image v-model="article.photo" :pathImage="'/images/redacteurs/'+article.image"
                :class="{'w-80 aspect-[3/1.68] border':true,'border-red-600':messages.photo}" />
                <div class=" w-64 p-4">
                    cliquer sur l'image pour changer
                </div>
            </div>
            <message-input :messageItem="messages.photo" :status="status"  />
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
import _ from 'lodash';

export default {
  components: { ChoixCouleur, SimpleButton, MessageInput, InputImage },
    props:['article','redacteurs','categories','redirect','mode'],
    data(){
        return {
            messages:{
                titre:'',
                resume:"",
                redacteur_id:'',
                categorie_id:'',
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
            console.log('form-create-article');
            console.log(this.article);
            event.preventDefault();
            let formdata= new FormData();
            let article=(this.mode=='edit')?_.cloneDeep(this.article):this.article;
            console.log(article);
            for(let key in article){
                console.log(key);
                formdata.append(key,this.article[key])
            }
            console.log(formdata);

            if(this.mode=="create"){
                axios.post('/lougare_npl/article',formdata,{headers: {"Content-Type": "multipart/form-data",},})
                .then(res=>{
                    this.onSuccess(res.data);

                }).catch(err=>{

                });
            }
            else if(this.mode=='edit'){
                formdata.append('_method','put');
                axios.post('/lougare_npl/article/'+this.article.id,
                    formdata,
                    {
                        headers: {"Content-Type": "multipart/form-data",},
                    }
                ).then(res=>{
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
