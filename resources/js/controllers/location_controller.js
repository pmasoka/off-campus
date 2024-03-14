import { Controller } from "@hotwired/stimulus";

// Connects to data-controller="location"
export default class extends Controller {
    static values = {
        locations: Array,
    };

    static targets = ["select", "university"];

    connect() {
        this.filter({ target: this.universityTarget });
    }

    filter({ target }) {
        const locations = this.locationsValue.filter(
            (loc) => loc.university_id == target.value,
        );

        const markup = locations
            .map((loc) => `<option value="${loc.id}">${loc.name}</option>`)
            .join("\n");

        this.selectTarget.innerHTML = markup;
    }
}
