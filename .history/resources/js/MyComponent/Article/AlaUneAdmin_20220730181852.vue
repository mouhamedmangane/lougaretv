<template>
    <div class="grid grid-cols-12 gap-4 w-100 py-4">
        <div class=" border relative bg-neutral-100 aspect-[1.5] col-span-3"
             v-for="i in [0,1,2,3]"
             @dragstart="dragStart($event,i)"
             @dragend="dragEnd"
             @dragover="dragOver"
             @drop="drop($event,i)" >
            <img src="" alt="" class="h-16 w-100" >
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
           this.$emit('dropCase',{dropIndex:i,dragIndex:this.positionSelected});
        }

      },
      dragStart(event,position){
        this.dragIndex=position;
      },
      dragEnd(e){
        this.dragIndex=-1;
      },
    }
}
</script>

<style>

</style>
