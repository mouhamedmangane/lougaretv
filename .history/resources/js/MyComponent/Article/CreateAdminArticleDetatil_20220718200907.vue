<template>
      <div class="w-full min-h-80">

        <!-- toolbar -->
        <div class="flex justify-center">
            <simple-button icon="save" txt="Titre" class="bg-neutral-600 text-sm text-white mx-2" @click="addNewElement('draw_titre')" />
            <simple-button icon="save" txt="Paragraphe" class="bg-neutral-600 text-sm text-white mx-2" @click="addNewElement('draw_paragraphe')" />
            <simple-button icon="save" txt="Image" class="bg-neutral-600 text-sm text-white mx-2" @click="addNewElement('draw_image')" />
            <simple-button-file icon="save" txt="Image" class="bg-neutral-600 text-sm text-white mx-2" @change-file="addNewElementInput($event,'draw_image')" />

        </div>
        <!-- property -->
        <div class=" flex justify-center m-8 bg-neutral-100">
            <!-- elements -->
            <div class="border bg-neutral-100 p-4 w-[700px] w-max-[700px] ">
                <div class="bg-white p-4" >
                    <div v-for="element in elements" :key="element.position" class="p-4 group relative" draggable="true"
                        @drop="drop($event,element.position)"
                        @dragstart="dragStart($event,element.position)"
                        @dragend="dragEnd"
                        @dragenter="dragEnter($event,element.position)"
                        @dragover="dragOver"
                        @dragleave="dragLeave"
                        :my="element.position">
                        <div class="flex justify-end hidden group-hover:inline-block absolute top-0 right-0" >
                            <button @click="deleteElement(element)" class="text-white bg-red-700 text-sm px-1 leading-none">
                                <material-icon nom="close" class="leading-none"/>
                            </button>
                        </div>
                        <component :is="element.nom"  :mmodel="element.mmodel"  />
                    </div>
                </div>
            </div>
        </div>


        </div>

</template>

<script >
import drawConstantes from '../../Pages/Admin/DrawConst'
import AppAdminLayout from '@/Layouts/AppAdminLayout.vue'
import AdminContainedBox from '@/MyComponent/Box/AdminContainedBox.vue'
import BreadcumbItemFinal from '@/MyComponent/Breadcumb/BreadcumbItemFinal.vue'
import MaterialIcon from '@/MyComponent/Icons/MaterialIcon.vue'
import SimpleButton from '@/MyComponent/Input/SimpleButton.vue'
import InputText from '@/MyComponent/Input/InputText.vue'
import InputGroup from '@/MyComponent/Input/InputGroup.vue'
import ParagraheDraw from '@/MyComponent/ArticleDraw/ParagraheDraw.vue'
import TitreDraw from '@/MyComponent/ArticleDraw/TitreDraw.vue'
import ImageDraw from '@/MyComponent/ArticleDraw/ImageDraw.vue'
import SimpleButtonFile from '@/MyComponent/Input/SimpleButtonFile.vue'
import axios from 'axios'
import BreadcumbItem from '@/MyComponent/Breadcumb/BreadcumbItem.vue'


export default {
  components: { AppAdminLayout, AdminContainedBox, BreadcumbItemFinal, MaterialIcon, SimpleButton, InputText, InputGroup, ParagraheDraw, TitreDraw, ImageDraw, SimpleButtonFile, BreadcumbItem },
  props:[
      'elements'
  ],
  data(){
      return {
          propertyActive:[],
          courant:0,
          dragSrcEl:-1,
          elementSelected:-1,

      }
  },
  methods:{
      addNewElement(index){
          let p=JSON.parse(JSON.stringify(drawConstantes[index]));
          p.position = this.courant;
          p.mmodel.position = this.courant;
          console.log(p);
          this.elements.push(p);
          this.courant++;

      },
      addNewElementInput(event,index){
          console.log(event);
          let p=JSON.parse(JSON.stringify(drawConstantes[index]));
          p.position = this.courant;
          p.mmodel.position = this.courant;
          Object.assign(p.mmodel,JSON.parse(JSON.stringify(event)));
          p.mmodel.file=event.file;
          console.log(p);
          this.elements.push(p);
          this.courant++;

      },
      valider(){
          let formdata=new FormData();
          formdata.append('data',this.elements);
          for(let element of this.elements){
              if(element.mmodel.$file){
                  console.log('ggg');
                                  formdata.append('images[]',element.mmodel.$file);

              }
          }
          axios.post('/lougare_npl/article/store',formdata,{
               headers: {
                    "Content-Type": "multipart/form-data",
                },
          }).then(res=>{

          }).catch(err=>{
              console.log(err);
          });
          this.elements[0].mmodel.txt='abaa';
          console.log(this.elements);
      },
      deleteElement(element){

          let confim=confirm('Etes vous sure de vouloir supprimer cet element ?');
          if(confirm){
            for(let i=0;i<this.elements.length;i++){
                if(this.elements[i].position==element.position){
                    this.elements.splice(i,1);
                    break;
                }
            }
          }

      },
      dragStart(event,position){
          console.log('--------start drag');
          console.log(position);
          this.dragSrcEl=position;
          event.target.style.opacity = .5;
      },
      dragEnd(e){
          e.target.style.opacity = '';
      },
      drop(e,position){
        console.log('--------drop drag');
        console.log(position);
        console.log(this.dragSrcEl);
        if (e.stopPropagation) {
            e.stopPropagation(); // stops the browser from redirecting.
        }
                             e.target.style.border="none";

        if(position!=this.dragSrcEl){

            let iSrc=this.getIndexByPosition(this.dragSrcEl);
            let iDest=this.getIndexByPosition(position);
            let temp=this.elements[iSrc];
            this.elements[iSrc]=this.elements[iDest];
            this.elements[iDest]=temp;
        }


      },
      dragEnter(e){
          e.target.style.border="4px dashed black";
      },
      dragLeave(e){
         e.target.style.border="none";

      },
      dragOver(e){
          e.preventDefault();
          return false;
      },

      getIndexByPosition(position){
            for(let i=0;i<this.elements.length;i++){
                if(this.elements[i].position==position){
                    return i;
                }
            }
            return -1;
      }
  }
}
</script>

<style>

</style>
