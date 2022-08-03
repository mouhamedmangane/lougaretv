<template>
    <div class="mx-2 bg-white p-4 flex  shadow-md" >
        <div class="mr-4">
            <!-- <label class="mb-2 inline-block">Image</label> -->
            <div class="">
                <div class="">
                    <input-image v-model="article.photo" :pathImage="src"
                    :class="{'w-[30rem] 2xl:w-[40rem] aspect-[3/2] border border-neutral-600':true,'border-red-600':messages.photo}" />
                    <div class="text-neutral-600 py-2">
                        Cliquer sur l'image pour changer
                    </div>
                </div>
                <message-input :messageItem="messages.photo" :status="status"  />
            </div>
        </div>
        <form action="" class="  p-4 grid  gap-4" @submit="onSubmit" method="post" ref="myForm">

            <div class="col-start-1 border-b"><label for="titre_client"  class="col-start-1" >Titre : </label></div>
            <div class="col-start-2 border-b">
                <textarea type="text" v-model="article.titre_client"  :class="{'2xl:w-80':true,'border-red-600':messages.titre_client}" @keyup="messages.titre=false" rows="3"></textarea>
                <message-input :messageItem="messages.titre_client" :status="status"  />
            </div>

            <div class="col-start-1 border-b"><label for="resume_client"  class="col-start-1" >Resume : </label></div>
            <div class="col-start-2 border-b">
                <textarea type="text" v-model="article.resume_client" :class="{'2xl:w-80':true,'border-red-600':messages.resume_client}" @keyup="messages.resume=false" rows="2"></textarea>
                <message-input :messageItem="messages.resume_client" :status="status"  />
            </div>

            <div class="col-start-1 border-b"><label for="categorie"  class="col-start-1" >Categorie : </label></div>
            <div class="col-start-2 border-b">
                <select type="text" v-model="article.categorie_id" :class="{'2xl:w-80':true,'border-red-600':messages.categorie_id}" @keyup="messagse.categorie_id=false">
                    <option :value="categorie.id" v-for="categorie in categories" :key="categorie.id">{{categorie.id}}</option>
                </select>
                <message-input :messageItem="messages.categorie_id" :status="status"  />
            </div>

            <div class="col-start-1"><label for="redacteur"  class="col-start-1" >Redacteur : </label></div>
            <div class="col-start-2">
                <select type="text" v-model="article.redacteur_id" :class="{'2xl:w-80':true,'border-red-600':messages.redacteur_id}" @change="messagses.redacteur_id=false">
                    <option :value="redacteur.id" v-for="redacteur in redacteurs" :key="redacteur.id">{{redacteur.name}}</option>
                </select>
                <message-input :messageItem="messages.redacteur_id" :status="status"  />
            </div>

            <button type="submit" ref="valider" class="hidden"> submit</button>

        </form>

   
    </div>


    <div class="mt-4 mx-2 bg-white  shadow-md p-4 flex justify-between border " >
        <create-admin-article-detatil :elements="article.elements"  :titre="article.titre_client"/>
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
     computed:{
        src(){
            if(this.article.image){
                return '/images_articles/'+this.article.id+'/'+this.article.image;
            }
            return '/images/no-image.jpg';
        }
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
            let elements=_.cloneDeep(this.article.elements);
            for(let key in article){
                console.log(key);
                if(key!='elements'){
                    formdata.append(key,this.article[key])
                }
                else{
                    for(let element of elements){
                        for(let modelKey in element.mmodel){
                            if(element.mmodel.$file){
                                formdata.append('articles_files['+element.mmodel.position+']',element.mmodel.$file);
                                delete element.mmodel.$file;
                                delete element.mmodel.src;
                            }

                        }
                    }
                }
            }
            formdata.append('elements',JSON.stringify(elements));



            console.log(article);
            console.log(formdata);

            if(this.mode=="create"){
                axios.post('/lougare_npl/article',formdata,{headers: {"Content-Type": "multipart/form-data",},})
                .then(res=>{
                    this.onSuccess(res.data);

                }).catch(err=>{
                                        console.log(this.article);

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
                    console.log(this.article);
                });
            }
        },

    },
    mounted(){
        console.log(this.article);
        //console.log(this.redacteurs);
    // this.$refs.myForm.addEventListener('submit',this.onSubmit);
    }

}
</script>

<style>

</style>
