import MainLayout from "../layout/MainLayout";

function ErrorPage() {
    return (
        <MainLayout>
            <div id="error-page">
                <h1>Oops!</h1>
                <p>Sorry, an unexpected error has occurred.</p>
            </div>
        </MainLayout>
    );
}

export default ErrorPage;
