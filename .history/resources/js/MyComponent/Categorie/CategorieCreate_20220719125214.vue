<template>
    <div class="flex  items-center" >
    <form action="" class=" p-4 grid grid-cols-2 gap-4" @submit="onSubmit" method="post" ref="myForm">

        <div class="col-start-1"><label for="id"  class="col-start-1" >Nom : </label></div>
        <div class="col-start-2">
            <input type="text" v-model="categorie.id" class="col-start-2" :class="{'border-red-600':messages.id}">
            <message-input :messageItem="messages.id" :status="status"  />
            <message-input :messageItem="messages.old_id" :status="status"  />
        </div>


        <div class="col-start-1"><label for=""  >Choix Fond : </label></div>
        <div class="col-start-2"><choix-couleur name="couleur_fond" v-model:color="categorie.couleur_fond"/></div>

        <div class="col-start-1"><label for="" >Couleur txt : </label></div>
        <div class="col-start-2"><choix-couleur name="couleur_txt" v-model:color="categorie.couleur_txt" defaultColor="black" class="col-start-2" /></div>
        <button type="submit hidden" ref="valider" class=""> submit</button>
    </form>
    <div class=""  >
        <div class="px-4 py-1 text-4xl ml-8" :style="{'background-color':categorie.couleur_fond,'color':categorie.couleur_txt}">
            {{categorie.id}}
        </div>
    </div>
    </div>
</template>

<script>
import ChoixCouleur from '@/MyComponent/Input/ChoixCouleur.vue'
import SimpleButton from '../Input/SimpleButton.vue'
import axios from 'axios';
import MessageInput from '../Input/MessageInput.vue';
export default {
  components: { ChoixCouleur, SimpleButton, MessageInput },
    props:['categorie','redirect','mode'],
    data(){
        return {
            messages:{
                id:undefined,
                couleur_txt:'',
                couleur_fond:'',
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
            console.log('form-create-categorie');
            console.log(this.categorie);
            event.preventDefault();
            if(this.mode=="create"){
                axios.post('/lougare_npl/categorie',Object.assign({}, this.categorie)
                ).then(res=>{
                    this.onSuccess(res.data);

                }).catch(err=>{

                });
            }
            else if(this.mode=='edit'){
                axios.put('/lougare_npl/categorie/'+this.categorie.id,Object.assign({}, this.categorie)
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
