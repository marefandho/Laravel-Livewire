import './bootstrap';
import 'preline';

document.addEventListener("livewire:navigated", () => {
    window.HSOverlay?.autoInit();
});