export const handleFormSubmit = async (data) => {
    try {
        const response = await fetch('example-api', {
            method: "POST",
            body: JSON.stringify(data),
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
        });
        const result = await response.json();
        console.log(result)
        console.log("SUCCESS")
    } catch (e) {
        console.log(e)
    }
}
