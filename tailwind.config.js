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
            fontFamily: {
                'righteous': ['Righteous', 'cursive'],
            },
            colors: {
                'pink':'#ff7ac6'
            }
        },
    },
    plugins: [require("daisyui")]
}
