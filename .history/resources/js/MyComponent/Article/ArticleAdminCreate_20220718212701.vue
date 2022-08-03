<template>
    <div class="mx-2 bg-white p-4 flex justify-between shadow-md" >
        <form action="" class=" p-4 grid = gap-4" @submit="onSubmit" method="post" ref="myForm">

            <div class="col-start-1"><label for="name"  class="col-start-1" >Titre : </label></div>
            <div class="col-start-2">
                <textarea type="text" v-model="article.titre"  :class="{'2xl:w-80':true,'border-red-600':messages.name}" @keyup="messages.titre=false" rows="3"></textarea>
                <message-input :messageItem="messages.titre" :status="status"  />
            </div>

            <div class="col-start-1"><label for="email"  class="col-start-1" >Resume : </label></div>
            <div class="col-start-2">
                <textarea type="text" v-model="article.resume" :class="{'2xl:w-80':true,'border-red-600':messages.email}" @keyup="messages.email=false" rows="3"></textarea>
                <message-input :messageItem="messages.email" :status="status"  />
            </div>

            <div class="col-start-1"><label for="Mot de Passe"  class="col-start-1" >Categorie : </label></div>
            <div class="col-start-2">
                <select type="text" v-model="article.categorie_id" :class="{'2xl:w-80':true,'border-red-600':messages.pwd}" @keyup="messagse.pwd=false">
                    <option :value="categorie.id" v-for="categorie in categories" :key="categorie.id">{{categorie.id}}</option>
                </select>
                <message-input :messageItem="messages.pwd" :status="status"  />
            </div>

            <div class="col-start-1"><label for="Mot de Passe"  class="col-start-1" >Redacteur : </label></div>
            <div class="col-start-2">
                <select type="text" v-model="article.redacteur_id" :class="{'2xl:w-80':true,'border-red-600':messages.pwd}" @keyup="messagse.pwd=false">
                    <option :value="redacteur.id" v-for="redacteur in redacteurs" :key="redacteur.id">{{redacteur.name}}</option>
                </select>
                <message-input :messageItem="messages.pwd" :status="status"  />
            </div>

            <button type="submit" ref="valider" class="hidden"> submit</button>

        </form>

        <div class="p-4">
            <label class="mb-2 inline-block">Image</label>
            <div class="">
                <div class="">
                    <input-image v-model="article.photo" :pathImage="'/images/redacteurs/'+article.image"
                    :class="{'w-[30rem] 2xl:w-[40rem] aspect-[3/1.68] border border-neutral-600':true,'border-red-600':messages.photo}" />
                    <div class=" p-4">
                        Cliquer sur l'image pour changer
                    </div>
                </div>
                <message-input :messageItem="messages.photo" :status="status"  />
            </div>
        </div>
    </div>


    <div class="mt-4 mx-2 bg-white  shadow-md p-4 flex justify-between border " >
        <create-admin-article-detatil :elements="article.elements" />
    </div>

</template>

<script>
import ChoixCouleur from '@/MyComponent/Input/ChoixCouleur.vue'
import SimpleButton from '../Input/SimpleButton.vue'
import axios from 'axios';
import MessageInput from '../Input/MessageInput.vue';
import InputImage from '../Input/InputImage.vue';
import _ from 'lodash';
import CreateAdminArticleDetatil from './CreateAdminArticleDetatil.vue';


export default {
  components: { ChoixCouleur, SimpleButton, MessageInput, InputImage, CreateAdminArticleDetatil,  },
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
        console.log(this.categories);
        console.log(this.redacteurs);
    // this.$refs.myForm.addEventListener('submit',this.onSubmit);
    }

}
</script>

<style>

</style>
