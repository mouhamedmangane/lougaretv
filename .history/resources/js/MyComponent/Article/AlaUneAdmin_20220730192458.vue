<template>
    <div class="grid grid-cols-12 gap-4 w-full py-4">
        <div class="relative border relative  aspect-[1.5] col-span-3 bg-white "
             v-for="i in [0,1,2,3]"
             @dragstart="dragStart($event,i)"
             @dragend="dragEnd"
             @dragover="dragOver"
             @drop="drop($event,i)"
             draggable="true"
             >
            <div class="absolute top-0 -left-0 px-6 py-3 rounded-br-3xl border d-flex items-center z-20">
                <span class="text-2xl">{{ i }}</span>
            </div>
            <div v-if="alaunes[i]" class="h-full w-full bg-white z-10 flex flex-col">
                <img :src="'/images_articles/'+alaunes[i].article_id+'/'+alaunes[i].image" alt="" class="h-full w-full grow object-cover" >
                <div class=" h-16 border-t ">
                    {{ alaunes[i].nom }}
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
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
