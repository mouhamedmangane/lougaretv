<template>
    <div class="flex flex-wrap justify-center w-full py-4 2xl:pt-0 2xl:w-[32rem] mr-4">
        <div class="relative border relative  w-64 2xl:w-1/2  h-56 2xl:h-46   bg-white "
             v-for="i in [0,1,2,3]"
             @dragstart="dragStart($event,i)"
             @dragend="dragEnd"
             @dragover="dragOver"
             @drop="drop($event,i)"
             draggable="true"
             >
            <div class="absolute top-0 -left-0 px-6 2xl:px-4 py-3 2xl:py-2 rounded-br-3xl border d-flex items-center z-20 bg-primary-600 text-white">
                <span class="2xl:text-lg text-2xl ">{{ i+1 }}</span>
            </div>
            <div class="absolute bottom-0 right-0 px-6 2xl:px-4 py-3 2xl:py-2 rounded-br-3xl border d-flex items-center z-20 bg-red-600 text-white">
                <material-icon nom="delete" class="text-lg"/>
            </div>
            <div v-if="alaunes[i]" class=" w-full bg-white z-10">
                <img :src="'/images_articles/'+alaunes[i].article_id+'/'+alaunes[i].image" alt="" class="h-32 w-full object-cover" >
                <div class=" h-[77px] border-t p-3 text-ellipsis overflow-hidden  text-sm ">
                    {{ alaunes[i].txt }}
                </div>
            </div>
            <div v-if="!alaunes[i]" class="flex justify-center items-center w-full h-full">
                <span class="text-neutral-400"> Vide</span>
            </div>

        </div>
    </div>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue';
export default {
  components: { MaterialIcon },
    props:['alaunes','selectedArticle'],
    data(){
        return {
            dragIndex:-1,
        }
    },
    emits:['dropCase'],
    methods:{
      dragOver(e){
          e.preventDefault();
          return false;
      },
      drop(e,i){
        if (e.stopPropagation) {
            e.stopPropagation();
        }
        this.$emit('dropCase',{dropIndex:i,dragIndex:this.dragIndex});
      },
      dragStart(event,position){
        this.dragIndex=position;
      },
      dragEnd(e){
        this.dragIndex=-1;
        console.log(this.dragIndex);
      },

    },


}
</script>

<style>

</style>
