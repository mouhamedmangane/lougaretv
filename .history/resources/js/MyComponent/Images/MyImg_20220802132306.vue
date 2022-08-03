<template>
<div :class="[classBloc,'  ']">
    <img :src="src" :alt="alt" :class="[classImage,' object-cover w-full  z-10  ']">
</div>
</template>

<script>
const classImageConst={
    'hpm':{
       'bloc':'max-w-fit max-h-fit   ',
        'image':'h-[112px] h-[93.3px] h-full'
    },
    'pm':{
        'bloc':'h-24 aspect-[3/2.5]',
        'image':'h-full'
    },
    'pmp':{
        'bloc':'max-w-64 w-full 2xl:w-64  ',
        'image':''
    },
    'mm':{
        'bloc':'2xl:h-48 md:h-32 aspect-[5/4]',
        'image':'h-full'
    },
    'mmv':{
        'bloc':'h-64 ',
        'image':''
    },
    'mmp':{
        'bloc':'w-full ',
        'image':'aspect-[3/2]'
    },
    'gm':{
        'bloc':'w-full h-full',
        'image':'h-full'
    },
    'gm-full':{
        'bloc':'w-full h-full',
        'image':'h-full w-full'
    },
    'gmp':{
        'bloc':'w-full  aspect-[3/1.9]',
        'image':'h-full'
    },

}
export default {
    props:['size','src','alt'],
    computed:{
        classImage(){
            console.log(this.size);
            return classImageConst[this.size]['image'];
        },
        classBloc(){
            return classImageConst[this.size]['bloc'];
        }
    }
}
</script>

<style>

</style>
