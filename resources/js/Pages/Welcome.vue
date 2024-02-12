<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import FrontendLayout from "@/Layouts/Frontend.vue";
import Hero from "@/Components/Frontend/Hero.vue";
import About from "@/Components/Frontend/About.vue";
import Skills from "@/Components/Frontend/Skills.vue";
import Portfolio from "@/Components/Frontend/Portfolio.vue";
import Projects from "@/Components/Frontend/Projects.vue";

defineProps({ skills: Object, projects: Object });
</script>

<template>
    <Head title="Welcome to My Portfolio" />
    <FrontendLayout>
        <Hero />
        <About />
        <Skills :skills="skills" />
        <Portfolio :skills="skills" :projects="projects" />
    </FrontendLayout>
</template>
