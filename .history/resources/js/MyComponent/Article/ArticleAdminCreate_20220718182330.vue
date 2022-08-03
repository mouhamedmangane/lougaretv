<template>
    <div class="flex  items-center" >
    <form action="" class=" p-4 grid grid-cols-2 gap-4" @submit="onSubmit" method="post" ref="myForm">

        <div class="col-start-1"><label for="name"  class="col-start-1" >Nom : </label></div>
        <div class="col-start-2">
            <input type="text" v-model="article.name"  :class="{'':true,'border-red-600':messages.name}" @keyup="messages.name=false">
            <message-input :messageItem="messages.name" :status="status"  />
        </div>

        <div class="col-start-1"><label for="email"  class="col-start-1" >Email : </label></div>
        <div class="col-start-2">
            <input type="text" v-model="article.email" :class="{'':true,'border-red-600':messages.email}" @keyup="messages.email=false">
            <message-input :messageItem="messages.email" :status="status"  />
        </div>

        <div class="col-start-1"><label for="Moy de Passe"  class="col-start-1" >Mot de Passe : </label></div>
        <div class="col-start-2">
            <input type="text" v-model="article.pwd" :class="{'':true,'border-red-600':messages.pwd}" @keyup="messagse.pwd=false">
            <message-input :messageItem="messages.pwd" :status="status"  />
        </div>

        <div class="col-start-1"><label for="confirmation"  class="col-start-1" >Confirmation MDP : </label></div>
        <div class="col-start-2">
            <input type="text" v-model="article.pwd_confirmation" :class="{'':true,'border-red-600':messages.pwd}">
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
import _ from 'lodash';

export default {
  components: { ChoixCouleur, SimpleButton, MessageInput, InputImage },
    props:['article','redirect','mode'],
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
