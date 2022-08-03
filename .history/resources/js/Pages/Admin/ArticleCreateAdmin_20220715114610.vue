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
            <simple-button icon="save" txt="Image" class="bg-neutral-600 text-sm text-white mx-2" @click="addNewElement('draw_image')" />

        </div>
        <!-- property -->
        <div class="flex">

        </div>

        <!-- elements -->
        <div class="border bg-neutral-100 p-4">
            <div class="bg-white p-4">
                <component :is="element.nom" v-for="element in elements" :mmodel="element.mmodel"  :key="element.position"/>
                <image-draw />
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


export default {
  components: { AppAdminLayout, AdminContainedBox, BreadcumItem, BreadcumbItemFinal, MaterialIcon, SimpleButton, InputText, InputGroup, ParagraheDraw, TitreDraw, ImageDraw },
  props:{
      titre:String,
  },
  data(){
      return {
          propertyActive:[],
          courant:0,
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
      valider(){
          this.elements[0].mmodel.txt='abaa':
      }
  }
}
</script>

<style>

</style>
