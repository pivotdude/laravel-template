import React from 'react'
import Layout from "../components/core/Layout";

export default function Welcome({ user }: WelcomeProps) {
    return (
        <Layout>
            <h1>Welcome</h1>
            <p>Hello, welcome to your first Inertia app!</p>
        </Layout>
    )
}
// Welcome.layout = page => <Layout children={page} title="Welcome" />
