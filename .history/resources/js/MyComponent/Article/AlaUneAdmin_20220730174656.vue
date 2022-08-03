<template>
    <div class="grid grid-cols-12 gap-4 w-100 py-4">
        <div class=" border relative bg-neutral-100 aspect-[1.5] col-span-3"
             v-for="alaune in [1,2,3,4]"
             @dragover="dragOver" >
            <img src="" alt="" class="h-16 w-100" >
        </div>
    </div>
</template>

<script>
export default {
    props:['alaunes'],
    methods:{
         dragOver(e){
          e.preventDefault();
          return false;
      },
    }
}
</script>

<style>

</style>
