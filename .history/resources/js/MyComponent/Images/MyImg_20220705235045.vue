<template>
<div :class="[classBloc,'  bg-neutral-100 rounded']">
    <img :src="src" :alt="alt" :class="[classImage,' object-cover w-full  z-10  rounded']">
</div>
</template>

<script>
const classImageConst={
    'hpm':{
       'bloc':'max-w-fit max-h-fit   ',
        'image':'h-[112px] h-[93.3px] h-full'
    },
    'pm':{
        'bloc':'max-w-fit w-28 2xl:w-32 ',
        'image':'aspect-[3/2.5]'
    },
    'pmp':{
        'bloc':'max-w-fit w-32 2xl:w-32  ',
        'image':''
    },
    'mm':{
        'bloc':'max-w-fit w-[17rem] ',
        'image':''
    },
    'mmv':{
        'bloc':'h-64 ',
        'image':''
    },
    'mmp':{
        'bloc':'w-full',
        'image':'aspect-[3/2]'
    },
    'gm':{
        'bloc':'w-full',
        'image':'h-full'
    },
    'gmp':{
        'bloc':'w-full',
        'image':'aspect-[3/1.69]'
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
