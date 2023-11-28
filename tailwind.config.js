import preset from './vendor/filament/support/tailwind.config.preset'
export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            screens: {
                
            },
            fontFamily: {
                'righteous': ['Righteous', 'sans'],
                scandia: ['Scandia Line', 'sans'],
                Quicksand: ['Quicksand', 'sans'],
            },
            colors: {
                'pink':'#ff7ac6',
                'hijau':'#3dd9b2'
            },
        },
    },
    daisyui: {
        themes: ["light",
        "dark",
        "cupcake",
        "bumblebee",
        "emerald",
        "corporate",
        "retro",
        "cyberpunk",
        "valentine",
        "halloween",
        "garden",
        "forest",
        "aqua",
        "lofi",
        "pastel",
        "fantasy",
        "wireframe",
        "black",
        "luxury",
        "dracula",
        "cmyk",
        "autumn",
        "business",
        "acid",
        "lemonade",
        "night",
        "coffee",
        "winter",
        "dim",
        "nord",
        "sunset",],
    },
    plugins: [require("daisyui")]
}
