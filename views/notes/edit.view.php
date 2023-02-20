<?php require(view('partials/head.php')); ?>
<?php require(view('partials/nav.php')); ?>
<?php require(view('partials/banner.php')); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 hover:underline">Go back...</a>
        </p>

        <form class="mt-5" method="POST">
            <input type="hidden" name="_method" value="DELETE"/>
            <input type="hidden" name="id" value="<?= $note['id'] ?>"/>
            <button class="text-sm text-red-500">Delete</button>
        </form>

        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <form method="POST" action="/note">
                        <input type="hidden" name="_method" value="PATCH" />
                        <input type="hidden" name="id" value="<?= $note['id'] ?>" />
                        <div class="shadow sm:overflow-hidden sm:rounded-md">

                            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                <div>
                                    <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                                    <div class="mt-1">
                                        <textarea
                                            id="body"
                                            name="body"
                                            rows="3"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        ><?= $note['body'] ?></textarea>

                                        <?php if (isset($errors['body'])) : ?>
                                            <p class="text-red-400 text-sm font-bold mt-2"><?= $errors['body'] ?></p>
                                        <?php endif ?>

                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6 flex gap-x-4 justify-end">
                                <a href="/notes" class="inline-flex justify-center rounded-md border border-transparent bg-gray-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancel</a>
                                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Update</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>

<?php require(view('partials/foot.php')); ?>
