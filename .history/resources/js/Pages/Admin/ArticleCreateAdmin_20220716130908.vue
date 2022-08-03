<template>
  <app-admin-layout >
      <admin-contained-box class="">
          <!-- titre et toolbar -->
        <div class="py-4 flex">
            <div class=" ">
                <breadcumb class="text-2xl">
                    <breadcum-item url='lougare_npl/article' txt='Article'/>
                    <breadcumb-item-final txt="Nouveau Article" class="text-primary-600"/>
                </breadcumb>
                <div class="flex my-4">
                    <simple-button icon="save" txt="Enregistrer" class="bg-primary-600 text-white"  @click="valider()"/>
                    <simple-button  txt="Annuler" class="text-primary-600" />
                </div>
            </div>
            <div>

            </div>
        </div>
        <!-- toolbar -->
        <div class="flex">
            <simple-button icon="save" txt="Titre" class="bg-neutral-600 text-sm text-white mx-2" @click="addNewElement('draw_titre')" />
            <simple-button icon="save" txt="Paragraphe" class="bg-neutral-600 text-sm text-white mx-2" @click="addNewElement('draw_paragraphe')" />
            <simple-button-file icon="save" txt="Image" class="bg-neutral-600 text-sm text-white mx-2" @change-file="addNewElementInput($event,'draw_image')" />

        </div>
        <!-- property -->
        <div class="flex">

        </div>

        <!-- elements -->
        <div class="border bg-neutral-100 p-4 w-[700px] w-max-[700px] ">
            <div class="bg-white p-4" >
                <div v-for="element in elements" :key="element.position" class="p-4 group relative" draggable="true"
                     @drop="changePosition($event,element.position)"
                     @dragstart="startPosition($event,element.position)"
                     @dragenter="dragEnter($event,element.position)"
                     @dragover="dragOver"
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

        <!-- formulaire -->
        <!-- <div class="flex ">
            <div class="2xl:w-1/3 w-1/2  bg-white shadow">
                <input-group>
                    <input type="text" v-model="titre">
                </input-group>
                <input-group>
                    <select class="w-full py-2">
                    </select>
                </input-group>
                <input-group>
                    <textarea name="" row="4" class="w-full">
                    </textarea>
                </input-group>



            </div>

        </div> -->
      </admin-contained-box>

  </app-admin-layout>
</template>

<script >
import drawConstantes from './DrawConst'
import AppAdminLayout from '@/Layouts/AppAdminLayout.vue'
import AdminContainedBox from '@/MyComponent/Box/AdminContainedBox.vue'
import BreadcumItem from '@/MyComponent/Breadcumb/BreadcumItem.vue'
import BreadcumbItemFinal from '@/MyComponent/Breadcumb/BreadcumbItemFinal.vue'
import MaterialIcon from '@/MyComponent/Icons/MaterialIcon.vue'
import SimpleButton from '@/MyComponent/Input/SimpleButton.vue'
import InputText from '@/MyComponent/Input/InputText.vue'
import InputGroup from '@/MyComponent/Input/InputGroup.vue'
import ParagraheDraw from '@/MyComponent/ArticleDraw/ParagraheDraw.vue'
import TitreDraw from '@/MyComponent/ArticleDraw/TitreDraw.vue'
import ImageDraw from '@/MyComponent/ArticleDraw/ImageDraw.vue'
import SimpleButtonFile from '@/MyComponent/Input/SimpleButtonFile.vue'


export default {
  components: { AppAdminLayout, AdminContainedBox, BreadcumItem, BreadcumbItemFinal, MaterialIcon, SimpleButton, InputText, InputGroup, ParagraheDraw, TitreDraw, ImageDraw, SimpleButtonFile },
  props:{
      titre:String,
  },
  data(){
      return {
          propertyActive:[],
          courant:0,
          dragSrcEl:-1,
          elements:[

          ],
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
      startPosition(event,position){
          console.log('--------start drag');
          console.log(position);
          this.dragSrcEl=position;
      },
      changePosition(e,position){
        console.log('--------drop drag');
        console.log(position);
        console.log(this.dragSrcEl);
        if (e.stopPropagation) {
            e.stopPropagation(); // stops the browser from redirecting.
        }
        if(position!=this.dragSrcEl){
            let iSrc=this.getIndexByPosition(this.dragSrcEl);
            let iDest=this.getIndexByPosition(position);
            let temp=this.elements[iSrc];
            this.elements[iSrc]=this.elements[iDest];
            this.elements[iDest]=temp;
        }


      },
      dragEnter(e,position){
          e.target.style.background="red";
      },
      dragOver(e){
          e.preventDefault();
      },

      getIndexByPosition(position){
            for(let i=0;i<this.elements.length;i++){
                if(this.elements[i].position==position){
                    this.elements.splice(i,1);
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
