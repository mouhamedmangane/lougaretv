<template>
<div class="2xl:bg-neutral-200">
    <div class="z-10 2xl:max-w-7xl   mx-auto bg-white">
        <app-menu class=" " />
        <div class="z-10">
            <slot></slot>
        </div>
    </div>
</div>

</template>

<script>
import AppMenu from '@/MyComponent/Menu/AppMenu.vue'
export default {
  components: { AppMenu },

}
</script>

<style>
    .text-masquer {
    clip: rect(1px,1px,1px,1px);
    -webkit-clip-path: inset(100%);
    clip-path: inset(100%);
    margin: 0;
    position: absolute!important;
    height: 1px;
    width: 1px;
    overflow: hidden;
    word-wrap: normal!important;
    white-space: nowrap;
}
</style>
