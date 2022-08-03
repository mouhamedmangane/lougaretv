<template>
    <div class="grid grid-cols-12 gap-4 w-full py-4">
        <div class=" border relative bg-neutral-100 aspect-[1.5] col-span-3"
             v-for="i in [0,1,2,3]"
             @dragstart="dragStart($event,i)"
             @dragend="dragEnd"
             @dragover="dragOver"
             @drop="drop($event,i)"
             draggable="true"
             >

            <div v-if="alaunes.length>i" class="h-full w-full">
                <img :src="'/images_articles/'+alaunes[i].article_id+'/'+alaunes[i].image" alt="" class="h-fulls w-full" >
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
